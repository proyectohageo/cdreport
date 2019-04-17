<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $calldate
 * @property string $clid
 * @property string $src
 * @property string $dst
 * @property string $dcontext
 * @property string $channel
 * @property string $dstchannel
 * @property string $lastapp
 * @property string $lastdata
 * @property int $duration
 * @property int $billsec
 * @property string $disposition
 * @property int $amaflags
 * @property string $accountcode
 * @property string $uniqueid
 * @property string $userfield
 * @property string $did
 * @property string $recordingfile
 * @property string $cnum
 * @property string $cnam
 * @property string $outbound_cnum
 * @property string $outbound_cnam
 * @property string $dst_cnam
 * @property string $linkedid
 * @property string $peeraccount
 * @property int $sequence
 */
class Cdr extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'cdr';

    /**
     * @var array
     */
    protected $fillable = ['calldate', 'clid', 'src', 'dst', 'dcontext', 'channel', 'dstchannel', 'lastapp', 'lastdata', 'duration', 'billsec', 'disposition', 'amaflags', 'accountcode', 'uniqueid', 'userfield', 'did', 'recordingfile', 'cnum', 'cnam', 'outbound_cnum', 'outbound_cnam', 'dst_cnam', 'linkedid', 'peeraccount', 'sequence'];

}
