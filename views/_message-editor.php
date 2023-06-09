<div class="container">
  <?php include('views/components/messages.php') ?>
  <div class="page__header wide">
    <div class="group">
      <span class="group__title">Message Editor</span>
    </div>
    <span class="description">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet...</span>
  </div>
  <div class="content">
   <form class="modify" action="" method="">
    <div class="content__row short">
      <div class="details">
        <span class="title">PAGE INFORMATION</span>
        <span class="description">These are messages that appear to be logged in users that cannot use the application to vote. It appears after logging in.</span>
      </div>
      <div class="fields">
        <div class="field full">
          <label for="first_name">Unverified Account</label>
          <input id="first_name" type="first_name" class="form-control" name="first_name" required autocomplete="first_name" value="Your account will be verified by the COMELEC. Please wait until further notice.">
        </div>
        <div class="field full">
          <label for="first_name">Inactive Account</label>
          <input id="first_name" type="first_name" class="form-control" name="first_name" required autocomplete="first_name" value="Your account is inactive because you are not enrolled.">
        </div>
      </div>
    </div>
    <div class="content__row short">
      <div class="details">
        <span class="title">Register / Log In Page</span>
        <span class="description">These are messages that appear in Register and Log In pages when an error occurs.</span>
      </div>
      <div class="fields">
        <div class="field full">
          <label for="first_name">Non-existent Student ID inputted</label>
          <input id="first_name" type="first_name" class="form-control" name="first_name" required autocomplete="first_name" value="Student ID does not exist in the system. Contact COMELEC. If there is an issue.">
        </div>
        <div class="field full">
          <label for="first_name">Student ID exists but belongs to another account during register</label>
          <input id="first_name" type="first_name" class="form-control" name="first_name" required autocomplete="first_name" value="Student ID belongs to another account. Contact COMELEC if there is an issue.">
        </div>
        <div class="field full">
          <label for="first_name">Unmatched Student ID and Password. Student ID exists.</label>
          <input id="first_name" type="first_name" class="form-control" name="first_name" required autocomplete="first_name" value="Wrong password. Contact COMELEC if there is an issue.">
        </div>
      </div>
    </div>
    <div class="content__row short">
      <div class="details">
       <span class="title">Voting Page</span>
       <span class="description">These are messages shown in the voting page.</span>
      </div>
      <div class="fields">
        <div class="field full">
          <label for="first_name">End of voting</label>
          <input id="first_name" type="first_name" class="form-control" name="first_name" required autocomplete="first_name" value="Thank you for voting with us!">
        </div>
        <div class="field full">
          <label for="first_name">Before election period</label>
          <input id="first_name" type="first_name" class="form-control" name="first_name" required autocomplete="first_name" value="The election period has not started.">
        </div>
        <div class="field full">
          <label for="first_name">Unmatched Student ID and Password. Student ID exists</label>
          <input id="first_name" type="first_name" class="form-control" name="first_name" required autocomplete="first_name" value="Election has ended. See results on the Results page">
        </div>
        <div class="field full">
          <label for="first_name">No active election</label>
          <input id="first_name" type="first_name" class="form-control" name="first_name" required autocomplete="first_name" value="There is no incoming election yet.">
        </div>
        <div class="field full">
          <label for="first_name">Inactive account</label>
          <input id="first_name" type="first_name" class="form-control" name="first_name" required autocomplete="first_name" value="Your account is inactive. Contact COMELEC for further details.">
        </div>
      </div>
    </div>
    <div class="content__row short">
      <div class="details">
        <span class="title">Results Page</span>
        <span class="description">These are messages shown in the results page.</span>
      </div>
      <div class="fields">
        <div class="field full">
          <label for="first_name">Before election period</label>
          <input id="first_name" type="first_name" class="form-control" name="first_name" required autocomplete="first_name" value="The election period has not started.">
        </div>
        <div class="field full">
          <label for="first_name">During election period</label>
          <input id="first_name" type="first_name" class="form-control" name="first_name" required autocomplete="first_name" value="Results will show after the election period. Vote through Voting page.">
        </div>
        <div class="field full">
            <label for="first_name">No active election</label>
            <input id="first_name" type="first_name" class="form-control" name="first_name" required autocomplete="first_name" value="There is no incoming election yet.">
        </div>
      </div>
    </div>
    <div class="content__row short">
      <div class="details">
        <span class="title">Defaults</span>
        <span class="description">These are</span>
      </div>
      <div class="fields">
        <div class="field full">
          <label for="first_name">Before election period</label>
          <input id="first_name" type="first_name" class="form-control" name="first_name" required autocomplete="first_name" value="The election period has not started.">
        </div>
        <div class="field full">
          <label for="first_name">During election period</label>
          <input id="first_name" type="first_name" class="form-control" name="first_name" required autocomplete="first_name" value="Results will show after the election period. Vote through Voting page.">
        </div>
        <div class="field full">
          <label for="first_name">No active election</label>
          <input id="first_name" type="first_name" class="form-control" name="first_name" required autocomplete="first_name" value="There is no incoming election yet.">
        </div>
       </div>
     </div>
   </form>
  </div>
  <div class="page__actions">
    <button type="submit" class="primary wide">Save Changes</button>
  </div>
  </div>
</div>