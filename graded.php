<?php include("head.php"); ?>

  <?php include("navbar.php"); ?>

    <div class="container">
     <div class="row">
        <div class="col-md-5">
          <div class="panel panel-primary">
            <div class="panel-heading">GRADED - Item Description</div>
            <div class="panel-body">
              <form role="form">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="bookTitle">Title</label>
                    <input type="text" class="form-control" id="bookTitle" ng-model="bookTitle" placeholder="Title">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="bookCertified">Certified</label>
                    <input type="text" class="form-control" id="bookCertified" ng-model="bookCertified" placeholder="Certified">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="bookCondition">Condition</label>
                    <input type="text" class="form-control" id="bookCondition" ng-model="bookCondition" placeholder="Condition">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="bookNotes">Additional Notes</label>
                    <input type="text" class="form-control" id="bookNotes" ng-model="bookNotes" placeholder="Additional Notes">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <button type="button" class="btn btn-primary" id="copy-button">Copy Code</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="col-md-7">
          <div class="panel panel-info">
            <div class="panel-heading">Template Output</div>
            <div class="panel-body">
              <textarea class="form-control" rows="20" id="copy-content"><table style="border-collapse: collapse; font: 14px/21px arial, sans-serif; color: #444; width: 100%;"><tr><td colspan="2" style="background-color: #333; color: #fff; padding: 14px; text-align: right;"><a href="http://www.ebay.com/sch/heymikesays/m.html" target="_blank" style="color: #fff;">View Other Listings &#187;</a></td></tr><tr><td style="background-color: #dbdbdb; padding: 14px; text-align: center; vertical-align: text-top; width: 96px;"><a href="http://www.1904comics.com/" target="_blank"><img src="http://www.1904comics.com/ebay/1904comics-sm.jpg" alt="1904 Comics" style="margin: 0 0 14px;"></a><br><a href="http://www.facebook.com/1904comics" target="_blank"><img src="http://www.1904comics.com/ebay/1904comics-fb.png" alt="1904 Comics - Facebook" style="margin: 0 0 14px;"></a><br><a href="http://www.twitter.com/1904comics" target="_blank"><img src="http://www.1904comics.com/ebay/1904comics-tw.png" alt="1904 Comics - Twitter" style="margin: 0 0 14px;"></a><br><a href="http://www.instagram.com/1904comics" target="_blank"><img src="http://www.1904comics.com/ebay/1904comics-ig.png" alt="1904 Comics - Instagram" style="margin: 0 0 14px;"></a></td><td style="background-color: #f0f0f0; padding: 14px; text-align: left;"><p style="background-color: #ddd; display: block; font-weight: bold; margin: 0 0 14px; padding: 7px 14px;">Item Description:</p><p style="margin: 0 14px 7px; padding: 0;"><span style="display: block; margin: 0 0 7px;"><strong>Title:</strong> {{bookTitle}}</span><span style="display: block; margin: 0 0 7px;"><strong>Certified:</strong> {{bookCertified}}</span><span style="display: block; margin: 0 0 7px;"><strong>Condition:</strong> {{bookCondition}}</span><span style="display: block; margin: 0;"><strong>Additional Notes:</strong> {{bookNotes}}</span></p><p style="margin: 0 14px 7px; padding: 0;">Grading is a subjective process. While we do our best to offer accuracy in quality, content information, and condition, we provide no guarantee. An item may not be returned for full or partial refund because of errors in content reporting or disagreement between condition. You should not bid on this item unless you are sure that this is the item you want.</p><p style="background-color: #ddd; display: block; font-weight: bold; margin: 14px 0; padding: 7px 14px;">Shipping Information:</p><p style="margin: 0 14px 7px; padding: 0;"><span style="display: block; margin: 0 0 7px;"><strong>United States: $5.99 Flat Rate</strong><br>Tracking information is included in the shipping at no additional charge.</span><span style="display: block; margin: 0 0 7px;"><strong>Delivery Time</strong><br>All orders ship within 1-3 business days. Once shipped, estimated delivery is 3-5 business days.</span><span style="display: block; margin: 0;"><strong>Packing</strong><br>Packing materials are made to ensure maximum possible protection against transit damage.</span></p></td></tr></table></textarea>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include("footer.php"); ?>