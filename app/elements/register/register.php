
  <dom-module id="register">
    <template>
        <style>
        </style>
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
 
</dom-module>

<script>
    Polymer({
        is: 'register',
        properties: {
            schedule: {
                type: Array
            },
            sessions: {
                type: Array
            },
            selected: {
                type: Number,
                value: 0
            },
            opened: {
                type: Boolean,
                observer: '_openedChanged'
            }
        },
        observers: [
            'checkUrlParams(schedule, sessions)'
        ]
    });
</script>
