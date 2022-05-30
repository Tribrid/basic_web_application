<?php 
include "conn.php";
include "header.php";
?>
    <section class="u-clearfix u-image u-shading u-section-1" id="sec-b5dd" data-image-width="450" data-image-height="346">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-container-style u-group u-group-1">
          <div class="u-container-layout u-valign-bottom">
            <h1 class="u-custom-font u-font-oswald u-text u-title u-text-1">With SAPMA you can</h1>
            <p class="u-text u-text-2">study and rewrite previously failed courses in a more friendly and condusive environment</p>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-2" id="sec-1ef5">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-center u-container-style u-layout-cell u-left-cell u-size-23 u-layout-cell-1">
                <div class="u-container-layout u-valign-middle-xs u-container-layout-1">
                  <div alt="" class="u-hover-feature u-image u-image-circle u-image-1" src="" data-image-width="640" data-image-height="428" data-animation-name="rollIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction=""></div>
                </div>
              </div>
              <div class="u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-md u-align-left-xl u-container-style u-layout-cell u-right-cell u-size-37 u-layout-cell-2">
                <div class="u-container-layout u-valign-middle-sm u-valign-middle-xs u-container-layout-2">
                  <h2 class="u-text u-text-default u-text-1">About Us</h2>
                  <p class="u-text u-text-2">SAPMA is ..........</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </section>
    <section class="u-align-center u-clearfix u-image u-section-3" id="sec-14d5" data-image-width="1280" data-image-height="853">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-custom-font u-font-raleway u-text u-text-white u-text-1">AVAILABLE COURSES</h1>
        <div class="u-table u-table-responsive u-table-1">
          <table class="u-table-entity u-table-entity-1">
            <colgroup>
              <col width="33.5%">
              <col width="41.4%">
              <col width="25.1%">
            </colgroup>
            <thead class="u-align-center u-grey-10 u-table-header u-table-header-1">
              <tr style="height: 89px;">
                <th class="u-border-2 u-border-palette-1-light-1 u-palette-2-light-1 u-table-cell u-table-cell-1">Course Code</th>
                <th class="u-border-2 u-border-palette-1-light-1 u-palette-2-base u-table-cell u-table-cell-2">Course Title</th>
                <th class="u-border-2 u-border-palette-1-light-1 u-palette-2-base u-table-cell u-table-cell-3">Failure Rate</th>
              </tr>
            </thead>
            <tbody class="u-align-center u-grey-90 u-table-alt-grey-80 u-table-body u-table-body-1">
              <?php 
                $sql= "SELECT * FROM s_courses";
              $run = mysqli_query($conn,$sql);

                                    while ($row = mysqli_fetch_array($run))
                                    {
             echo '<tr style="height: 69px;">
                <td class="u-border-2 u-border-grey-75 u-table-cell u-table-cell-4">'
                  
                      .$row['Course_code'].
                '</td>
                <td class="u-border-2 u-border-grey-75 u-table-cell u-table-cell-5">'
                      .$row['Course_title'].
                '</td>
                <td class="u-border-2 u-border-grey-75 u-table-cell u-table-cell-6">'
                      .$row['rate'].
                '</td>
              </tr>';
            }
            ?>
            </tbody>
          </table>
        </div>
        <a href="applyhere.php" data-page-id="724815147" class="u-align-center-sm u-align-center-xs u-btn u-btn-round u-button-style u-hover-feature u-hover-palette-1-light-1 u-palette-1-base u-radius-6 u-btn-1"> Apply to teach&nbsp; </a>
      </div>
      
    </section>
    <section class="u-clearfix u-grey-5 u-section-4" id="sec-a462">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-container-style u-group u-white u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h2 class="u-custom-font u-font-oswald u-text u-text-1">Contact Us</h2>
            <div class="u-align-left u-form u-form-1">
              <form action="contact_submission.php" method="POST">
                  <label class="u-form-control u-label">Name</label>
                    <input class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white" required="" type="text" name="name">
                    <br>
                    <label>Email</label>
                    <input class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white" required="" type="email" name="email">
                    <br>
                    <label>Message</label>
                    <textarea class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white  u-white-5 u-input u-input-rectangle" required="" type="text" name="message"></textarea>
                    <br>
                    <button type="submit" name="submit" class="u-border-2 u-border-black u-btn u-btn-submit u-button-style u-hover-black u-none u-text-black u-text-hover-white u-btn-1">Submit</button>
                </form>
            </div>
          </div>
        </div>
        <img src="images/184774318-0.jpeg" alt="" class="u-image u-image-default u-image-1" data-image-width="150" data-image-height="100">
        <div class="u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-palette-5-dark-3 u-repeater-item u-list-item-1">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2"><span class="u-icon u-icon-circle u-text-white u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 513.64 513.64" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-b103"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 513.64 513.64" x="0px" y="0px" id="svg-b103" style="enable-background:new 0 0 513.64 513.64;"><g><g><path d="M499.66,376.96l-71.68-71.68c-25.6-25.6-69.12-15.359-79.36,17.92c-7.68,23.041-33.28,35.841-56.32,30.72    c-51.2-12.8-120.32-79.36-133.12-133.12c-7.68-23.041,7.68-48.641,30.72-56.32c33.28-10.24,43.52-53.76,17.92-79.36l-71.68-71.68    c-20.48-17.92-51.2-17.92-69.12,0l-48.64,48.64c-48.64,51.2,5.12,186.88,125.44,307.2c120.32,120.32,256,176.641,307.2,125.44    l48.64-48.64C517.581,425.6,517.581,394.88,499.66,376.96z"></path>
</g>
</g></svg></span>
                <h5 class="u-text u-text-2">Call Us</h5>
                <p class="u-text u-text-3">233 (0)55-4567-891, 233 (0)50-9487-654</p>
              </div>
            </div>
            <div class="u-container-style u-list-item u-palette-5-dark-3 u-repeater-item u-list-item-2">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3"><span class="u-icon u-icon-circle u-text-white u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-b082"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512 512" id="svg-b082"><g><path d="m386.058 256c0-8.284 6.716-15 15-15h31.587c-7.224-85.814-75.831-154.421-161.645-161.645v31.588c0 8.284-6.716 15-15 15s-15-6.716-15-15v-31.588c-85.814 7.224-154.421 75.831-161.645 161.645h31.587c8.284 0 15 6.716 15 15s-6.716 15-15 15h-31.587c7.224 85.814 75.831 154.421 161.645 161.645v-31.588c0-8.284 6.716-15 15-15s15 6.716 15 15v31.588c85.814-7.224 154.421-75.831 161.645-161.645h-31.587c-8.284 0-15-6.716-15-15zm-39.467-71.629-79.838 82.087c-5.558 5.714-14.618 6.086-20.625.835l-59.598-52.101c-6.237-5.452-6.873-14.929-1.42-21.165 5.452-6.237 14.928-6.875 21.166-1.421l48.889 42.739 69.921-71.891c5.776-5.938 15.273-6.069 21.211-.295 5.938 5.778 6.07 15.274.294 21.212z"></path><path d="m256 0c-141.159 0-256 114.841-256 256s114.841 256 256 256 256-114.841 256-256-114.841-256-256-256zm0 463.286c-114.298 0-207.286-92.988-207.286-207.286s92.988-207.286 207.286-207.286 207.286 92.988 207.286 207.286-92.988 207.286-207.286 207.286z"></path>
</g></svg></span>
                <h5 class="u-text u-text-4">Business Hours</h5>
                <p class="u-text u-text-5">Mon – Fri …… 10 am – 8 pm, Sat, Sun ....… Closed</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    
    <!-- <footer class="u-clearfix u-footer u-grey-80" id="sec-cf19"><div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-container-style u-group u-group-1">
          <div class="u-container-layout u-valign-middle u-container-layout-1">
            <p class="u-small-text u-text u-text-1">SAPME</p>
          </div>
        </div>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="templates" target="_blank">
        <span>Template</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Offline Website Builder</span>
      </a>. 
    </section> -->
  </body>
</html>