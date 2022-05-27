<div class="col-12 mb-2" id="filterBox">
    <form action="{{ route('superadmin.admins.index') }}" id="filter-form">
        <h4><i class="mdi mdi-filter"></i> Filter</h4>
        <div class="form-row">
            <div class="col">
                <label>Name</label>
                <div class="input-group">
                    <input type="text" class="form-control form-control-sm" id="name" placeholder="Name"
                        name="name" value="{{ $filter_name }}">
                </div>
            </div>
            <div class="col">
                <label>Email</label>
                <div class="input-group">
                    <input type="email" class="form-control form-control-sm" id="email" placeholder="Email"
                        name="email" value="{{ $filter_email }}">
                </div>
            </div>
            <div class="col">
                <label>Status</label>
                <div class="input-group">
                    <select class="form-control form-control-sm" name="status">
                        <option value="" selected>All</option>
                        <option value="1" @isset($filter_status) @if($filter_status == 1) selected @endif @endisset>Active</option>
                        <option value="0" @isset($filter_status) @if($filter_status == 0) selected @endif @endisset>Inactive</option>
                    </select>
                </div>
            </div>
            <div class="col text-right filter-button">
                <button class="btn btn-sm btn-dark" type="submit">Apply</button>
                <a href="{{ route('superadmin.admins.index') }}" class="btn btn-sm btn-secondary"
                    type="submit">Reset</a>
            </div>
        </div>
    </form>

</div>
