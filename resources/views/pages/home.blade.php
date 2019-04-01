<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

@section('title', '| Home')

@extends('layouts.app')
@include('inc._jumbotron')
@include('inc._navbar')

@section('content')
<div class = "d-flex flex-row">
  <div class="col-4">@include('inc._sidebar')</div>
    <div class="col-lg-8 p-4">
      <h1 style="font-family: Freckle Face;">Biography</h1>
      <!-- <p>THE GRIM STARTED IN 1982 PLAYING PARTIES IN THE SAN FERNANDO VALLEY. THEIR MUSIC APPEARED ON NUMEROUS COMPILATION RECORDS RELEASED BY MYSTIC RECORDS. IN 1984 MYSTIC RELEASED THEIR SELF TITLED RECORD KNOWN AS THE "ORANGE ALBUM". YOU MAY HAVE SEEN IT AS A BACKDROP IN THE MOVIE "PRETTY IN PINK". THE GRIM TOURED THE COUNTRY WITH NOFX, SCARED STRAIGHT. THEY PLAYED WITH BANDS LIKE SOCIAL DISTORTION, BAD RELIGION, NOFX, MINUTEMEN, PENNYWISE, THE VANDALS, DESCENDANTS, FACE TO FACE, RKL, NO USE FOR A NAME, ILL REPUTE, CIRCLE JERKS, AND MANY MORE! THE SONG, "SAIPAN DEATH MARCH" WAS ONE OF THE MOST REQUESTED SONGS ON THE RODNEY ON THE ROQ SHOW IN 1984. IN 1986 MYSTIC RECORDS RELEASED A SUPER SEVEN INCH RECORD FEATURING 4 SONGS RECORDED IN A TELEVISION STUDIO, ENTITLED "LIVE TO DIE". IN 1987 THE GRIM RECORDED AN ALBUM FOR MYSTIC THAT WAS EVENTUALLY RELEASED ON ALCHEMY RECORDS CALLED FACE OF BETRAYAL. IN 1988 MYSTIC RELEASED THE 7" LIVE AT FENDERS.
      THE BAND ENDED IN THE MID 90'S WHEN TIM STARTED WORKING FOR NOFX. THE BAND DID A COUPLE OF REUNION SHOWS IN EARLY 2001 WITH THE ORIGINAL MEMBERS, BUT SINCE JORDAN WAS IN STRUNG OUT THE REUNION WAS SHORT LIVED.
      FAST FORWARD TO 2010 THE BAND REFORMED WITH 3 NEW MEMBERS. TIM WAS ALWAYS TALKING WITH WITH EX JUGHEAD'S REVENGE BASSIST BRIAN PREISS ABOUT STARTING UP A NEW BAND, BUT BRIAN CONVINCED HIM TO REFORM THE GRIM. WHEN HE DECIDED TO CALL BOB, HE AGREED TO DO THE GRIM ONE MORE TIME.
      JEFF YEARSLEY WAS ASKED TO PLAY 2ND GUITAR. JEFF WAS A FELLOW BAND MATE AND FRIEND OF BRIAN'S FROM THE EARLY PUNK ROCK DAYS. THE BAND PLAYED THEIR FIRST SHOW WITH THE NEW LINE UP OPENING UP FOR THE ADOLESCENTS IN THE SUMMER OF 2010. 2016 SAW THE ADDITION OF ONE OF SIMI VALLEY'S FINEST DRUMMERS, MICAH ROSSELLINI. THE BAND WAS NOW COMPLETE AND IN 2017 RELEASED A NEW 7" ON FELONY RECORDS. IN 2018, THE BAND IS SET TO RELEASE THEIR FIRST FULL LENTH VINYL IN 30 YEARS WITH NEW WORLD ORDER THROUGH SOUND SPEED RECORDS.
      </p> -->
      <p>
        The Grim started in 1982 playing parties in the San Fernando Valley. Their music appeared on numerous compilation records released by Mystic Records. In 1984, Mystic released their self titled record known as the 'Orange Album'. You may have seen it as a backdrop in the movie 'Pretty In Pink'. The Grim toured the country with NOFX, Scared Straight. They played with bands like Social Distortion, Bad Religion, NOFX, Minutemen, Pennywise, The Vandals, Descendants, Face To Face, RKL, No Use For A Name, Ill Repute, Circle Jerks, and many more! The song, 'Saipan Death March' was one of the most requested songs on the Rodney On The Roq show in 1984.<br>
        <br>
        In 1986 Mystic Records released a super seven inch record featuring 4 songs recorded in a television studio, entitled 'Live To Die'.<br>
        <br>In 1987, The Grim recorded an album for Mystic, that was eventually released on Alchemy Records, called Face of Betrayal. In 1988, Mystic released the 7-inch 'Live at Fenders'.<br>
        <br>The band ended in the mid 90's when Tim started working for NOFX. The band did a couple of reunion shows in early 2001 with the original members, but since Jordan was in Strung Out, the reunion was short lived.<br>
        <br>Fast forward to 2010, the band reformed with 3 new members. Tim was always talking with with ex Jughead's Revenge bassist, Brian Preiss, about starting up a new band, but Brian convinced him to reform The Grim. When he decided to call Bob, he agreed to do The Grim one more time. Jeff Yearsley was asked to play 2nd guitar. Jeff was a fellow band mate and friend of Brian's from the early punk rock days. The band played their first show with the new line up opening up for the Adolescents in the summer of 2010.<br>
        <br>2016 saw the addition of one of Simi Valley's finest drummers, Micah Rossellini. The band was now complete and in 2017 released a new 7-inch on Felony Records. In 2018, the band is set to release their first full lenth vinyl in 30 years with 'New World Order through Sound Speed Records.
      </p>
    </div>
  </div>
</div>
@endsection
