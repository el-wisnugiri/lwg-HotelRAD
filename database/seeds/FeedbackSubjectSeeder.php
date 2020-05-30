<?php

use Illuminate\Database\Seeder;

class FeedbackSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('feedback_subjects')->insert(array(
            array(
                'subject' => 'General',
                'description' => 'General Enquiry / Comments',
            ),
            array(
                'subject' => 'Booking',
                'description' => 'Booking Enquiry / Room Availability',
            ),
            array(
                'subject' => 'Thank You',
                'description' => 'Message to thank the hotel / staff',
            ),
            array(
                'subject' => 'Complaint',
                'description' => 'Had a problem with your booking or stay',
            ),
            array(
                'subject' => 'Help',
                'description' => 'Assistance Required',
            ),
            array(
                'subject' => 'Bug',
                'description' => 'Problem with the application / web site',
            ),
        ));
    }
}
