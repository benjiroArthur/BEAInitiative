<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

use Intervention\Image\Facades\Image;

class PagesController extends Controller
{
    //return home page
    public function home()
    {
        $date = date('Y-m-d h:i:s', time());
        //dd($date);
        $upComingEvents = Event::where( 'start_date', '>', $date)->paginate(2);

        $onGoingEvents = Event::where( 'start_date', '<', $date)->Where('end_date', '>', $date)->paginate(2);
        $pastEvents = Event::where( 'end_date', '<', $date)->paginate(2);


        return view('pages.home')->with('upComingEvents', $upComingEvents)
            ->with('onGoingEvents', $onGoingEvents)
            ->with('pastEvents', $pastEvents);

    }

    public function about()
    {
        return view('pages.about');
    }

    public function gallery()
    {
        $folder1 = public_path('images/gallery/donation');
        $folder2 = public_path('images/gallery/outreach');
        return view('pages.gallery')->with('folder1',$folder1)->with('folder2',$folder2);
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function createEvents()
    {
        return view('pages.createEvents');
    }

    public function events()
    {

        $date = date('Y-m-d h:i:s', time());
        //dd($events->start_date);
        $upComingEvents = Event::where( 'start_date', '>', $date)->paginate(12);
       //return $upComingEvents;
        $onGoingEvents = Event::where( 'start_date', '<', $date)->where('end_date', '>', $date)->paginate(12);
        $pastEvents = Event::where( 'end_date', '<', $date)->paginate(12);
        //dd($upComingEvents);
        return view('pages.events')->with('upComingEvents', $upComingEvents)
                                        ->with('onGoingEvents', $onGoingEvents)
                                        ->with('pastEvents', $pastEvents);
    }



    public function addEvents(Request $request)
    {
        //        Validate post fields to ensure none empty fields
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'organiser' => 'required',
            'location' => 'required'
        ]);

//Handle file upload
        if($request->hasFile('images'))
        {
            $fileNameCombine = array();
            foreach ($request->images as $image)
            {

                $fileNameWithExt = $image->getClientOriginalName();

                //Get just filename
                $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

                //Get just extension
                $extension = $image->getClientOriginalExtension();

                //Filename to store
                $fileNameToJoin = $fileName.'_'.time().'.'.$extension;

                //resize image

                //upload file
                $image->move(public_path('/images/events'), $fileNameToJoin);
               // $path = $image->storeAs('public/images/events', $fileNameToJoin);
                array_push($fileNameCombine, $fileNameToJoin);
                $imagePath = public_path('/images/events/'.$fileNameToJoin);
                $img = Image::make($imagePath)->resize(300,250)->save($imagePath);

            }

            //combining all files name as one to store in database
            $fileNameToStore = implode(',', $fileNameCombine);
        }
        else
        {
            $fileNameToStore = 'noimage.jpg';
        }

        $events = new Event;
        $events->title = $request->input('title');
        $events->description = $request->input('description');
        $events->start_date = $request->input('start_date');
        $events->end_date = $request->input('end_date');
        $events->image = $fileNameToStore;
        $events->organiser = $request->input('organiser');
        $events->location = $request->input('location');
        $events->save();
        return redirect('/createEvents')->with('success', 'Event Added Successfully');
    }
}
