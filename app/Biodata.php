<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Biodata extends Model{
    protected $fillable = ['nom','prenom','fonction','attestation_1','attestation_2'];
}
