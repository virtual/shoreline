@extends('_layouts.master')

@section('content')
 <h1>Timeline</h1>
  <div class="timeline">
    <div class="line text-muted"></div>
    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        @include('_partials.timelinelist', [
        'heading' => 'Build components & templates (June 5–Aug 30)',
        'desc' => "Build components into code; working demo available on Github. Testing is done iteratively.",
        'id' => '1', 
        'img' => ''
        ])

        @include('_partials.timelinelist', [
        'heading' => 'Accessibility review (Aug 13–Aug 27)',
        'desc' => "Shoreline's Accessibility team reviews and suggest changes for implementation",
        'id' => '2', 
        'img' => ''
        ])

        
        @include('_partials.timelinelist', [
        'heading' => 'Finalize program options in multiedit (Aug 27)',
        'desc' => "Finalize PCF for OU's migration of Excel to PCF",
        'id' => '2a', 
        'img' => ''
        ])
        
        @include('_partials.timelinelist', [
        'heading' => 'Code review (Aug 31–Sept 13)',
        'desc' => "Shoreline's team goes through demos and approves functionality. All HTML design files review and analyzed and verified to be functioning as expected, plus W3C and Accessibility Compliant. Functional Specification meeting(s) via webex take place to go through all elements in each page type to define the development plan. Report any issues, bugs, questions, or requests back to Jeanine.
        ",
        'id' => '3', 
        'img' => ''
        ])
        
        @include('_partials.timelinelist', [
        'heading' => 'Code updates (Sept 14–21)',
        'desc' => "Dev fixes.
        ",
        'id' => '4', 
        'img' => ''
        ])
                
        @include('_partials.timelinelist', [
        'heading' => 'Deadline for Program Option info (Sept 24)',
        'desc' => "Program option info due and submitted to OU for verification and to prep for migration.
        ",
        'id' => '7', 
        'img' => ''
        ])

        @include('_partials.timelinelist', [
        'heading' => 'Implement code on test server (Sept 24–28)',
        'desc' => "Update page design and template files. Update snippets to function similarly on new framework.
        ",
        'id' => '5', 
        'img' => ''
        ])

        @include('_partials.timelinelist', [
        'heading' => 'Review and test existing content into updated templates (Oct 1–5)',
        'desc' => "Shoreline team tests creating new pages using existing snippets; check and report any inconsistencies.
        ",
        'id' => '6', 
        'img' => ''
        ])

        @include('_partials.timelinelist', [
        'heading' => 'Code updates (Oct 8–9)',
        'desc' => "Dev fixes.
        ",
        'id' => '7a', 
        'img' => ''
        ])


        
        @include('_partials.timelinelist', [
        'heading' => 'Implementation process for new theme on www; republish website (Oct 10)',
        'desc' => "Verify working as expected.
        ",
        'id' => '8', 
        'img' => ''
        ])

        @include('_partials.timelinelist', [
        'heading' => 'OU Migration for Program options (Oct 15-19)',
        'desc' => "OU creates program options. Need to discuss when the file structure is built out--as well as program parent information.
        ",
        'id' => '9', 
        'img' => ''
        ])
  </div>

@endsection


  