@extends('layouts.app')
@section('title')
Information | Live on the Levee
@stop
@section('description')
Information and rules for Charleston WV's Live on the Levee
@stop
@section('content')

<div class="container">
  <h1>Live on the Levee Information</h1>
  <hr>
  <div class="row">
    <div class="col-md-2">
      <img src="../images/pages/logos/lolSmall.png" alt="LOL" class="img img responsive">
    </div>
    <div class="col-md-8 col-md-offset-1">
      <h2>General Information:</h2>
      <p>Moses Live on the Levee is an outdoor concert series presented by the City of Charleston, WV and is
        made possible by sponsorship and private donations.
      </p>
      <p>The event features live music of various styles, including local and national acts, in a welcoming family friendly atmosphere.</p>
      <p>Live on the Levee will take place every Friday afternoon from May 27, 2016 – September 2, 2016. Music starts at 6:30pm with the
        headliner starting at 7:30pm. Entry starts at 5:00pm and will end around 9:30pm. Admission to this fantastic event is free of charge!</p>
      <p>For more information on the line-up check out the schedule (here).</p>
      <p>Boats are more than welcome on a first come first served basis.</p>
      <p>2016 marks the thirteenth season of Moses Live on the Levee and the seventh year for the brand new Schoenbaum Stage and retractable canopy.</p>
      <p>Profits from the 50/50 raffle are drawn at 8:15pm to help raise money for a collective of Charleston area charities supported by Live on
        the Levee. The winner will receive half of what was collected, the other half will be equally split between all the charities.</p>
      <p>Domestic Beer and Wine will be on sale as well as multiple food vendors.</p>
      <h3>Park Rules:</h3>
      <ul>
        <li>Glass (bottles, dishes, glassware) is not permitted within Haddad Riverfront Park</li>
        <li>Please do not sit on steps within the park, as emergency access must be maintained</li>
        <li>Because people walking and in wheelchairs need to be able to have access along the
          back of the park, please do not set chairs on the bricks in the mark areas between the
          two light poles near the back wall of Haddad Park</li>
        <li>Smoking is not permitted in Haddad Park.</li>
      </ul>
      <h3>ATTENTION ALL BOATERS!</h3>
      <ul>
        <li>Boaters will need valid photo ID, proof of liability insurance coverage no less than $100,000 water liability per occurrence.</li>
        <li>See Caroline Mitchell in the City Manager’s Office at 304-348-8014</li>
      </ul>
    </div>
  </div>
  <hr>
</div>

@include('layouts.analyticstracking')
@stop
