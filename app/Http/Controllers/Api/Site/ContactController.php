<?php

namespace App\Http\Controllers\Api\Site;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Email;
use App\Models\Phone;
use App\Models\Address;

class ContactController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $listContacts = new Contact;
    $phones = Phone::all();
    $emails = Email::all();
    $adresses = Address::all();

    $responseProducts = $this->mergeObjectItens($listContacts, $phones, $emails,  $adresses);

    return response()->json($responseProducts);
  }

  private function mergeObjectItens($listContacts, $phones, $emails,  $adresses)
  {
    $listContacts->phones = $phones;
    $listContacts->emails = $emails;
    $listContacts->adresses = $adresses;

    return $listContacts;
  }
}
