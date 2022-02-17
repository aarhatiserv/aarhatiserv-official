<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Contact Us</h4>
        <button type="button" class="close" data-dismiss="modal">×</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="/contactform" method="post">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="phone">Phone number</label>
            <input type="text" name="phone" class="form-control" id="phone">
          </div>
          <div class="tp-store-name">Coupon Code :
            <span class="cb-text flat-green text-success" name="coupon" id="coupon"></span>
          </div>
          <br>
          <input type="submit" name="btn-send" value="Send" class="btn btn-primary sendBtn float-right py-2">

        </form>
      </div>

      <!-- Modal footer -->
      <!-- <div class="modal-footer">
          <button type="button" class="btn btn-danger endBtn " data-dismiss="modal">Close</button>
        </div> -->

    </div>
  </div>
</div>