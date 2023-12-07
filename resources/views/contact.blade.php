@extends('base')
@section('title', 'Contact')
@section('content')
<h2>Contact</h2>
<ul>
    <li>téléphone : le 06 00 00 00 00</li>
    <li>adresse : 5 Bd Louis XIV, 59800 Lille</li><br><br><br>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2530.91705909214!2d3.0685950122287533!3d50.62865757150849!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d59118928ab7%3A0xd0f3b05faaf1c4c!2sLe%20Cnam!5e0!3m2!1sfr!2sfr!4v1701955069636!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><br><br><br>
    <form>
    <li><label for="">email : </label><input type="email"></li>
    <li><label for="">votre demande : </label><input type="text"></li>
    <li><label for="">votre message : </label><input type="text"></li>
    <br><input type="submit" value="Envoyer">
    </form>
</ul>
@endsection