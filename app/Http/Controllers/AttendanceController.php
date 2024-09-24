<?php

namespace App\Http\Controllers;

use App\Models\AttendanceRecord;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    // Record attendance for a student
    public function store(Request $request)
    {
        $attendance = new AttendanceRecord();
        $attendance->student_id = $request->student_id;
        $attendance->course_id = $request->course_id;
        $attendance->status = $request->status;
        $attendance->date = $request->date;
        $attendance->save();

        return response()->json(['message' => 'Attendance recorded successfully']);
    }

    // Get attendance records for a student
    public function studentAttendance($student_id)
    {
        $attendanceRecords = AttendanceRecord::where('student_id', $student_id)->with('course')->get();
        return response()->json($attendanceRecords);
    }
}
