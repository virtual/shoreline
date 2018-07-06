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
        'desc' => "Update page design and template files. Update snippets to function similarily on new framework.
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
  <!-- 
    •	General Tentative Timelines discussed. 
o	Now until March 23rd, 2018:  ACC works internally on Final PSD designs.
o	March 23rd - April 30th, 2018:  HMTL Source Code created by OU Design partner (*Actual timeline may vary depending upon complexity of PSD designs, behavior of design code requested, etc.)
o	May 1st - May 15th, 2018:   
	All HTML design files review and analyzed by OU and verified to be functioning as expected, plus W3C and Accessibility Compliant.
	Functional Specification meeting(s) via webex take place to go through all elements in each page type to define the development plan for developers for each template page type.
o	May 16th - July 16th, 2018:  All development completed and delivered to ACC team for UAT.
o	July 17th - July 24th, 2018:  ACC performs all required UAT (User Acceptance Testing) and reports any issues, bugs, questions, or requests back to OU.
o	July 24th - July 31st, 2018:  OU Dev addresses all UAT feedback by ACC.
o	Aug 1st - Aug 7th, 2018:  ACC verifies all UAT addressed, any additional UAT addressed by OU dev.
o	Aug 8th - Aug 10th, 2018:  All Templates signed off by ACC, Sample Migration uploaded for ACC team to review and perform UAT on migrated content.
o	Aug 11 - Aug 18th, 2018:  ACC performs all required UAT (User Acceptance Testing) and reports any issues, bugs, questions, or requests back to OU.
o	Aug 19th - Aug 26st, 2018:  OU Dev addresses all UAT feedback by ACC.
o	Aug 26th - Aug 31st, 2018:  ACC verifies all UAT addressed, any additional UAT addressed by OU dev. 
	*All development completed by OU.
o	September 1st, 2018:  ACC team to begin all post-migration clean up, build out of new content, adding additional content using new components built from new design.
o	???? - Go-Live:  Ultimate Go-Live date is highly dependent on all milestones being met.  Some key milestones that can delay or compress the tentative timelines noted above and discussed on the call are: 
	Design files - both delivery of PSD files, and ultimate HTML source code files.
	Availability for ACC team to quickly perform all required UAT, and follow up checks.

   -->
@endsection


  