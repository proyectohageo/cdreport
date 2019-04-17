<?php

use Illuminate\Database\Seeder;
use App\Cdr;
use Carbon\Carbon;

class CdrTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i = 0; $i < 10000; ++$i) {
            $cdr= new Cdr;
            $cdr->calldate= Carbon::now()->subHours($i);
            $callingnumber=rand(9001,9999);
            $callednumber="2000";
            $cnam="Extension ".strval($callingnumber);
            $cdr->clid=$cnam." <".strval($callingnumber)."> ";
            $cdr->src=$callingnumber;
            if ($i % 2 == 0) {
                $cdr->dst=rand(2200001,2399999);
                $cdr->channel="SIP/200.7.167.35-0000000".strval($i);
                $cdr->dcontext="from-sip-external";
            } else{
                $callednumber=rand(9001,9999);
                $cdr->dst=$callednumber;
                $cdr->channel="PJSIP/9092-0000000".strval($i);
                $cdr->dcontext="from-internal";
                $cdr->cnum=$callingnumber;
                $cdr->cnam=$cnam;
            }
            if ($i % 3 == 0) {
                $cdr->lastapp="Playback";
                $cdr->lastdata="ss-noservice";    
            } else {
                $cdr->lastapp="Answer";            
            }
            $duration=rand(10,3600);
            $cdr->duration=$duration;
            $cdr->billsec=$duration;
            $cdr->disposition="ANSWERED";
            $cdr->amaflags=3;
            $uniqid=rand(1550000000,1560000000)+($i/100.0);
            $cdr->uniqueid=$uniqid;
            $cdr->linkedid=$uniqid;
            $cdr->save();
        }
    }
}
