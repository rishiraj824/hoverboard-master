<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
 <div class="row">
    <form class="col s12">
      <div class="row">
      <h1>Register</h1>
        <div class="input-field col s6">
          <input placeholder="Name" id="name" type="text" class="validate">
          <label for="name">Name</label>
        </div>
        <div class="input-field col s6">
          <input placeholder="Reg No" id="Reg No" type="text" class="validate">
          <label for="Reg No">Reg No</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="Gender"  id="gender" type="text" class="validate">
          <label for="gender">Gender</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="Phone" id="phone" type="text" class="validate">
          <label for="phone">phone</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="Email" id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
    </form>
  </div>
   <script>
        Polymer({
            is: 'register',
            properties: {
                session: {
                    type: Object
                },
                opened: {
                    type: Boolean,
                    notify: true
                }
            },
            ready: function() {
                var title = this.$.title;
                addEventListener('paper-header-transform', function(e) {
                    var d = e.detail;
                    var m = d.height - d.condensedHeight;
                    var transform = 50 * d.y / m;
                    Polymer.Base.transform('translate3d(' + transform + 'px,0,0)', title);
                });
            },
            _concatClass: function(basic, target) {
                return basic + ' ' + target;
            },
            _close: function() {
                this.opened = false;
            }
        });
    </script>