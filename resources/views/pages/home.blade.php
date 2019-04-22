<style>


@media screen and (min-width: 350px) and (max-width: 568px) {

    #content {
      columns: 1;
      margin-bottom: 15px;
      padding-bottom: 15px;

    }

    #footer {
      font-size: 8px;
      height: 50px;
      /* padding: 10px; */
    }

  }

@media screen and (min-width: 569px) and (max-width: 768px) {

  /* For tablets: */
  /* .col-s-1 {width: 8.33%;}
  .col-s-2 {width: 16.66%;}
  .col-s-3 {width: 25%;}
  .col-s-4 {width: 33.33%;}
  .col-s-5 {width: 41.66%;}
  .col-s-6 {width: 50%;}
  .col-s-7 {width: 58.33%;}
  .col-s-8 {width: 66.66%;}
  .col-s-9 {width: 75%;}
  .col-s-10 {width: 83.33%;}
  .col-s-11 {width: 91.66%;}
  .col-s-12 {width: 100%;} */

    #sidebar {
      position: relative;
      margin-left: 15px;
      columns: 1;
      max-height: 460px;

    }

    #content {
      position: relative;
      columns: 1;
      width: 100vh;
      padding-left: 25px;
    }

  .jumbotron img{
      margin-top: 15px;
      margin-left: auto;
      margin-right: auto;
    }

    .navbar {
      margin-top: 360px;
    }

    #newLP {
      width: auto;
      max-width: 200px;
    }

    #calendar {
      max-width: 260px;
    }

    #footer{
      position: fixed;
      font-size: 12px;
      padding: 12px;
      width: 100%;
      margin-bottom: 0px;
    }

}

@media screen and (min-width: 769px) and (max-width: 992px){

  #sidebar {
    position: relative;
    margin-left: 15px;
    max-width: 360px;
    height: auto;
  }

  #content {
    position: relative;
    columns: 1;
    width: 100vh;
    padding-left: 15px;
  }
  /* For desktop: */
  /* .col-1 {width: 8.33%;}
  .col-2 {width: 16.66%;}
  .col-3 {width: 25%;}
  .col-4 {width: 33.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;} */

}

/* large devices (large desktops, 1200px and up) */
@media screen and (min-width: 993px) {

  #sidebar {
    position: absolute;
    columns: 1;
    margin-left: 15px;
    width: 360px;
    height: auto;
  }
}

</style>

@section('title', '| Home')

@extends('layouts.app')

@include('inc._jumbotron')
@include('inc._navbar')

@section('content')

    @include('inc._sidebar')
    <div id="content" class="col-sm-12 col-md-6 offset-md-4 col-lg-6 offset-lg-4">
    <h1 style="font-family: Freckle Face;">Biography</h1>
    <!-- <p>THE GRIM STARTED IN 1982 PLAYING PARTIES IN THE SAN FERNANDO VALLEY. THEIR MUSIC APPEARED ON NUMEROUS COMPILATION RECORDS RELEASED BY MYSTIC RECORDS. IN 1984 MYSTIC RELEASED THEIR SELF TITLED RECORD KNOWN AS THE "ORANGE ALBUM". YOU MAY HAVE SEEN IT AS A BACKDROP IN THE MOVIE "PRETTY IN PINK". THE GRIM TOURED THE COUNTRY WITH NOFX, SCARED STRAIGHT. THEY PLAYED WITH BANDS LIKE SOCIAL DISTORTION, BAD RELIGION, NOFX, MINUTEMEN, PENNYWISE, THE VANDALS, DESCENDANTS, FACE TO FACE, RKL, NO USE FOR A NAME, ILL REPUTE, CIRCLE JERKS, AND MANY MORE! THE SONG, "SAIPAN DEATH MARCH" WAS ONE OF THE MOST REQUESTED SONGS ON THE RODNEY ON THE ROQ SHOW IN 1984. IN 1986 MYSTIC RECORDS RELEASED A SUPER SEVEN INCH RECORD FEATURING 4 SONGS RECORDED IN A TELEVISION STUDIO, ENTITLED "LIVE TO DIE". IN 1987 THE GRIM RECORDED AN ALBUM FOR MYSTIC THAT WAS EVENTUALLY RELEASED ON ALCHEMY RECORDS CALLED FACE OF BETRAYAL. IN 1988 MYSTIC RELEASED THE 7" LIVE AT FENDERS.
    THE BAND ENDED IN THE MID 90'S WHEN TIM STARTED WORKING FOR NOFX. THE BAND DID A COUPLE OF REUNION SHOWS IN EARLY 2001 WITH THE ORIGINAL MEMBERS, BUT SINCE JORDAN WAS IN STRUNG OUT THE REUNION WAS SHORT LIVED.
    FAST FORWARD TO 2010 THE BAND REFORMED WITH 3 NEW MEMBERS. TIM WAS ALWAYS TALKING WITH WITH EX JUGHEAD'S REVENGE BASSIST BRIAN PREISS ABOUT STARTING UP A NEW BAND, BUT BRIAN CONVINCED HIM TO REFORM THE GRIM. WHEN HE DECIDED TO CALL BOB, HE AGREED TO DO THE GRIM ONE MORE TIME.
    JEFF YEARSLEY WAS ASKED TO PLAY 2ND GUITAR. JEFF WAS A FELLOW BAND MATE AND FRIEND OF BRIAN'S FROM THE EARLY PUNK ROCK DAYS. THE BAND PLAYED THEIR FIRST SHOW WITH THE NEW LINE UP OPENING UP FOR THE ADOLESCENTS IN THE SUMMER OF 2010. 2016 SAW THE ADDITION OF ONE OF SIMI VALLEY'S FINEST DRUMMERS, MICAH ROSSELLINI. THE BAND WAS NOW COMPLETE AND IN 2017 RELEASED A NEW 7" ON FELONY RECORDS. IN 2018, THE BAND IS SET TO RELEASE THEIR FIRST FULL LENTH VINYL IN 30 YEARS WITH NEW WORLD ORDER THROUGH SOUND SPEED RECORDS.
    </p> -->
      <p>The Grim started in 1982 playing parties in the San Fernando Valley. Their music appeared on numerous compilation records released by Mystic Records. In 1984, Mystic released their self titled record known as the 'Orange Album'. You may have seen it as a backdrop in the movie 'Pretty In Pink'. The Grim toured the country with NOFX, Scared Straight. They played with bands like Social Distortion, Bad Religion, NOFX, Minutemen, Pennywise, The Vandals, Descendants, Face To Face, RKL, No Use For A Name, Ill Repute, Circle Jerks, and many more! The song, 'Saipan Death March' was one of the most requested songs on the Rodney On The Roq show in 1984.<br>
      <br>
      In 1986 Mystic Records released a super seven inch record featuring 4 songs recorded in a television studio, entitled 'Live To Die'.<br>
      <br>In 1987, The Grim recorded an album for Mystic, that was eventually released on Alchemy Records, called Face of Betrayal. In 1988, Mystic released the 7-inch 'Live at Fenders'.<br>
      <br>The band ended in the mid 90's when Tim started working for NOFX. The band did a couple of reunion shows in early 2001 with the original members, but since Jordan was in Strung Out, the reunion was short lived.<br>
      <br>Fast forward to 2010, the band reformed with 3 new members. Tim was always talking with with ex Jughead's Revenge bassist, Brian Preiss, about starting up a new band, but Brian convinced him to reform The Grim. When he decided to call Bob, he agreed to do The Grim one more time. Jeff Yearsley was asked to play 2nd guitar. Jeff was a fellow band mate and friend of Brian's from the early punk rock days. The band played their first show with the new line up opening up for the Adolescents in the summer of 2010.<br>
      <br>2016 saw the addition of one of Simi Valley's finest drummers, Micah Rossellini. The band was now complete and in 2017 released a new 7-inch on Felony Records. In 2018, the band is set to release their first full lenth vinyl in 30 years with 'New World Order through Sound Speed Records.
    </p>
  </div>
@endsection
