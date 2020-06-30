<?php $uniqueID = substr(md5(rand()), 0, 8); ?>
<li class="dropdown-list">
  <button aria-controls="{{$uniqueID}}sub" aria-expanded="false"><?php echo $uniqueID; ?></button>
  <div id="{{$uniqueID}}ub" class="dropdown-menu">
    <div class="row">
      <div class="col-3">
        <ul>
          <li><a href="/about-shoreline/contact-us.aspx">Explore <?php echo $uniqueID; ?> Life</a></li>
          <li><a href="http://app.shoreline.edu/campus-directory/">View Student Support Resources</a></li>
        </ul>
      </div>
      <div class="col-6">
        <h2><a href="/about-shoreline/default.aspx">About Shoreline</a></h2>
        <ul>
          <li><a href="/about-shoreline/default.aspx">About Shoreline</a></li>
          <li><a href="/about-shoreline/facts.aspx">Shoreline at a Glance</a></li>
          <li><a href="/about-shoreline/community-standard-statement.aspx">Community Standard</a></li>
          <li><a href="/about-shoreline/president.aspx">Shoreline's Leadership</a></li>
          <li><a href="/faculty/">Our Faculty</a></li>
        </ul>
        <ul>
          <li><a href="/about-shoreline/contact-us.aspx">Contact Us</a></li>
          <li><a href="http://app.shoreline.edu/campus-directory/">Employee Directory</a></li>
          <li><a href="/map/">Maps &amp; Directions</a></li>
          <li><a href="/apply-and-aid/campus-tour.aspx">Schedule a Visit</a></li>
        </ul>
      </div>
      <div class="col-3">
        <ul>
          <li><a href="/about-shoreline/contact-us.aspx">Contact Us</a></li>
          <li><a href="http://app.shoreline.edu/campus-directory/">Employee Directory</a></li>
          <li><a href="/map/">Maps &amp; Directions</a></li>
          <li><a href="/apply-and-aid/campus-tour.aspx">Schedule a Visit</a></li>
        </ul>
      </div>
    </div>
  </div>
  
     
</li>