
    <!-- form start -->
<form role="form" method="POST" action="{{ route('admin.company.store') }}" id="company-form">

    @csrf
      <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Company Name</label>
            <input name="company_name" type="text" class="form-control" id="company_name_id" placeholder="Company Name">
            @error('company_name')
                <small class="text-danger">
                    {{ $message }}
                </small>
            @enderror
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Company Phone</label>
            <input name="company_phone" type="text" class="form-control" id="company_phone_id" placeholder="Company Phone">
            @error('company_phone')
            <small class="text-danger">
                {{ $message}}
            </small>
        @enderror
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Company Address</label>
          <textarea class="form-control" name="company_address" id="company_address_id" cols="30" rows="3"></textarea>
          @error('company_address')
          <small class="text-danger">
              {{ $message}}
          </small>
      @enderror
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Company Country</label>
            <select class="form-control" name="company_country" id="company_country">
                <option value="1">Afghanistan</option>
                <option selected value="2">Kenya</option>
            </select>
            @error('company_country')
                <small class="text-danger">
                    {{ $message}}
                </small>
            @enderror
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Company Pin</label>
            <input name="company_pin" type="text" class="form-control" id="company_pin_id" placeholder="Company Pin">
            @error('company_pin')
                <small class="text-danger">
                    {{ $message}}
                </small>
            @enderror
        </div>
        <div class="form-group">
          <label for="exampleInputFile">Company Logo</label>
          <div class="input-group">
            <div class="custom-file">
              <input name="company_logo" type="file" class="custom-file-input" id="company_logo_id">
              <label class="custom-file-label" for="company_logo_id">Choose file</label>
            </div>
        </div>
        </div>


      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button onclick="companyFormSubmit()" class="btn btn-primary">Submit</button>
      </div>
    </form>
