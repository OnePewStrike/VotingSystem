<div class="container code short">
  <form action="" method="" class="modify access">
    <img src="assets/images/mobile_encryption.svg" alt="Mobile Encryption">
    <span class="title">Access Code Generator</span>
    <div class="fields">
      <div class="field full">
        <label for="student_id">Username</label>
        <input id="student_id" type="text" class="form-control" name="student_id" required autocomplete="student_id" placeholder="e.g., 2932778">
      </div>
      <div class="field full">
        <label for="student_id">Password</label>
        <input id="student_id" type="password" class="form-control" name="student_id" required autocomplete="student_id">
      </div>
      <div class="field button">
        <button class="primary">Generate Code</button>
      </div>
    </div>
  </form>
  <div class="card">
    <span class="description">Here's your generated code:</span>
    <div class="qr-code">[qr code here]</div>
    <div class="output-code">
      <span class="code"></span>
      <span class="code"></span>
      <span class="code"></span>
      <span class="code"></span>
      <span class="code"></span>
      <span class="code"></span>
    </div>
    <div class="actions">
      <button class="primary">
        <i class="fa-solid fa-text-slash"></i>
        <span class="name">Clear Code</span>
      </button>
    </div>
  </div>
</div>
