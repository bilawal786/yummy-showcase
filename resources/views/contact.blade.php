@extends('layouts.front')
@section('content')
    <style>

        input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #f78169;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #f78169;
        }

        .mycontainer {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>
    <div class="appie-page-title-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="appie-page-title-item">
                        <h3 class="title">Contact</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section>
        <div class="container">
            @if(Session::has('message'))
                <div class="empty_notice"><span>Vos coordonnées ont été soumises avec succès</span></div>
            @endif
            <div class="mycontainer" style="margin-top: 40px">
                <form method="POST" action="{{route('contact.submit')}}">
                    @csrf
                    <label for="fname">Prénom</label>
                    <input type="text" id="fname" required name="fname" placeholder="Prénom..">

                    <label for="lname">Nom de famille</label>
                    <input type="text"  required id="lname" name="lname" placeholder="Nom de famille..">

                    <label for="lname">Email</label>
                    <input type="text" required id="lname" name="email" placeholder="Email..">

                    <label for="lname">Téléphone</label>
                    <input type="text" required id="lname" name="phone" placeholder="Téléphone..">

                    <label for="lname">Adresse</label>
                    <input type="text" required id="lname" name="address" placeholder="Adresse..">


                    <label for="subject">Message</label>
                    <textarea id="subject" required name="message" placeholder="Message.." style="height:200px"></textarea>

                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>

    </section>


@endsection
