<?php $uniqueID = substr(md5(rand()), 0, 8); ?>
<li class="dropdown-list">
  <button aria-controls="{{$uniqueID}}sub" aria-expanded="false"><span class="button-text"><?php echo $uniqueID; ?> <span class="fas fa-caret-down button-expand" aria-hidden="true"></span></span></button>
  <div id="{{$uniqueID}}ub" class="dropdown-menu">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-lg-3 dropdown-column-1">
          <ul>
            <li><a class="btn btn-link" href="/about-shoreline/contact-us.aspx">Explore <?php echo $uniqueID; ?> Life</a></li>
            <li><a class="btn btn-link" href="http://app.shoreline.edu/campus-directory/">View Student Support Resources</a></li>
          </ul>
        </div>
        <div class="col-12 col-lg-6 dropdown-column-2">
          <h2><a href="/about-shoreline/default.aspx">About Shoreline</a></h2>
          <ul>
            <li><a href="/about-shoreline/default.aspx">About Shoreline</a></li>
            <li><a href="/about-shoreline/facts.aspx">Shoreline at a Glance</a></li>
            <li><a href="/about-shoreline/community-standard-statement.aspx">Community Standard</a></li>
            <li><a href="/about-shoreline/president.aspx">Shoreline's Leadership</a></li>
            <li><a href="/faculty/">Our Faculty</a></li>
            <li><a href="/about-shoreline/contact-us.aspx">Contact Us</a></li>
            <li><a href="http://app.shoreline.edu/campus-directory/">Employee Directory</a></li>
            <li><a href="/map/">Maps &amp; Directions</a></li>
            <li><a href="/apply-and-aid/campus-tour.aspx">Schedule a Visit</a></li>
          </ul>
        </div>
        <div class="col-12 col-lg-3 dropdown-column-3">
          <h2><a href="/about-shoreline/default.aspx">About Shoreline</a></h2>
          <ul>
            <li><a href="/about-shoreline/contact-us.aspx">Contact Us</a></li>
            <li><a href="http://app.shoreline.edu/campus-directory/">Employee Directory</a></li>
            <li><a href="/map/">Maps &amp; Directions</a></li>
            <li><a href="/apply-and-aid/campus-tour.aspx">Schedule a Visit</a></li>
          </ul>
        </div>
      </div>
    </div>

  </div>
</li>