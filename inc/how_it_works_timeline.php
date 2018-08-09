<?php 
/**
 * how does this work timeline 
 *
 * @package understrap
 */

/**
 * Count number of widgets in a sidebar
 * Used to add classes to widget areas so widgets can be displayed one, two, three or four per row
 */
function how_does_this_work() { ?>


<div class="timeline-body">
<div class="timeline">
  <div class="timeline-container left">
    <div class="timeline-content">
      <img src="<?php echo get_template_directory_uri();?>/imgs/boxer.svg" class="timeline-icon"</div>
      <div class="clearfix">
        <div class="box-content">
        <h2>You have an idea</h2>
      <p>You see something out in the wild or at a conference that you want to try, but need some support. Or, you're not sure what you want to do yet, but you're ready for a challenge.</p>
        </div>
      </div>
     </div>
  </div>
  <div class="timeline-container right">
    <div class="timeline-content">
      <img src="<?php echo get_template_directory_uri();?>/imgs/hander.svg" class="timeline-icon"</div>
    <div class="clearfix">
      <div class="box-content">
      <h2>You get in touch</h2>
      <p>You can reach out to us in a number of ways; If you prefer to learn as a part of a group, you can <a href="#">attend an upcoming workshop</a>. If you'd prefer a one-on-one consultation, you can <a href="#">choose someone with similar interests or relevant skills</a> and reach out to them. If you're still not sure what you need, you can attend our <a href="">open hours.</a></p>
        </div>
      </div>
    </div>
  </div>
    <div class="timeline-container left">
    <div class="timeline-content">
      <img src="<?php echo get_template_directory_uri();?>/imgs/mapper.svg" class="timeline-icon"</div>
    <div class="clearfix">
      <div class="box-content">
      <h2>We create a plan</h2>
      <p>We work with you to map out learning objectives based on your course goals, connect those with existing technologies or create new ones that don't yet exist, then support you in implementing them in your class.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="timeline-container right">
    <div class="timeline-content">
      <img src="<?php echo get_template_directory_uri();?>/imgs/engager.svg" class="timeline-icon"</div>
    <div class="clearfix">
      <div class="box-content">
      <h2>Your students engage</h2>
      <p>Whether you are looking to launch a fully online class, or just put a new spin on a face-to-face class, we can help you employ new pedagogical strategies to develop engaging and effective learning experiences for your students.</p>
        </div>
      </div>
    </div>
  </div>
</div>
  <div class="box-ender">
    <h2>Let's get started!</h2>
  </div>
</div>
  <?php } ?>