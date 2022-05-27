<div class="col-12 mb-2" id="filterBox">
    <form action="{{ route('superadmin.packages.index') }}" id="filter-form">
        <h4><i class="mdi mdi-filter"></i> Filter</h4>
        <div class="form-row">
            <div class="col">
                <label>Package Name</label>
                <div class="input-group">
                    <input type="text" class="form-control form-control-sm" id="name" placeholder="Package Name"
                        name="name" value="{{ $filter_name }}">
                </div>
            </div>
            <div class="col">
                <label>Billing Type</label>
                <div class="input-group">
                    <select class="form-control form-control-sm" name="billing_type">
                        <option value="">All</option>
                        <option value="monthly" {{ $filter_billing_type == 'monthly' ? 'selected' : '' }} >Monthly</option>
                        <option value="annually" {{ $filter_billing_type == 'annually' ? 'selected' : '' }}>Annually</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <label>Package Status</label>
                <div class="input-group">
                    <select class="form-control form-control-sm" name="status">
                        <option value="">All</option>
                        <option value="1" {{ $filter_status == 1 ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ $filter_status == 0 ? 'selected' : '' }}>Inactive</option>
                    </select>
                </div>
            </div>
            <div class="col text-right filter-button">
                <button class="btn btn-sm btn-dark" type="submit">Apply</button>
                <a href="{{ route('superadmin.packages.index') }}" class="btn btn-sm btn-secondary"
                    type="submit">Reset</a>
            </div>
        </div>
    </form>

</div>
