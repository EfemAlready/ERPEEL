<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class FullCalendarController extends Controller
{
    public function index()
    {
    	$events = array();
        $bookings = Event::all();
        foreach($bookings as $booking) {
            $color = null;
            if($booking->title == 'Training') {
                $color = '#924ACE';
            }
            if($booking->title == 'Match') {
                $color = '#68B01A';
            }

            $events[] = [
                'id'   => $booking->id,
                'title' => $booking->title,
                'start' => $booking->start_date,
                'end' => $booking->end_date,
                'color' => $color
            ];
        }
        return view('adminpages.event', ['events' => $events,'title'=> "Event"]);
    }

    public function action(Request $request)//store = action
    {
		$request->validate([
			'title' => 'required|string'
		]);

		$booking = Event::create([
			'title' => $request->title,
			'start_date' => $request->start_date,
			'end_date' => $request->end_date,
		]);

		$color = null;

		if ($booking->title == 'Test') {
			$color = '#924ACE';
		}

		return response()->json([
			'id' => $booking->id,
			'start' => $booking->start_date,
			'end' => $booking->end_date,
			'title' => $booking->title,
			'color' => $color ? $color : '',

		]);
    }
	public function update(Request $request, $id)
	{
		$booking = Event::find($id);
		if (!$booking) {
			return response()->json([
				'error' => 'Unable to locate the event'
			], 404);
		}
		$booking->update([
			'start_date' => $request->start_date,
			'end_date' => $request->end_date,
		]);
		return response()->json('Event updated');
	}
	public function destroy($id)
	{
		$booking = Event::find($id);
		if (!$booking) {
			return response()->json([
				'error' => 'Unable to locate the event'
			], 404);
		}
		$booking->delete();
		return $id;
	}
}
