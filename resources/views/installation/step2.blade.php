@extends('layouts.blank')

@section('content')
    <!-- Title -->
    <div class="text-center text-white mb-4">
        <h2>eFood Software Installation</h2>
        <h6 class="fw-normal">Please proceed step by step with proper data according to instructions</h6>
    </div>

    <!-- Progress -->
    <div class="pb-2">
        <div class="progress cursor-pointer" role="progressbar" aria-label="eFood Software Installation"
             aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" data-bs-toggle="tooltip"
             data-bs-placement="top" data-bs-custom-class="custom-progress-tooltip" data-bs-title="Second Step!"
             data-bs-delay='{"hide":1000}'>
            <div class="progress-bar" style="width: 40%"></div>
        </div>
    </div>

    <!-- Card -->
    <div class="card mt-4">
        <div class="p-4 mb-md-3 mx-xl-4 px-md-5">
            <div class="d-flex justify-content-end mb-2">
				<a style="color:red;" href="https://weadown.com" target="_blank">weadown.com</a>
            </div>

            <div class="d-flex align-items-center column-gap-3 flex-wrap">
                <h5 class="fw-bold fs text-uppercase">Step 2. </h5>
                <h5 class="fw-normal">Update Purchase Information</h5>
            </div>
            <p class="mb-4">Provide your <strong>username of codecanyon</strong> & <strong>purchase code</strong></p>

            <form method="POST" action="{{ route('purchase.code',['token'=>bcrypt('step_3')]) }}">
                @csrf
                <div class="bg-light p-4 rounded mb-4">

                    <div class="px-xl-2 pb-sm-3">
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="from-group">
                                    <label for="username" class="d-flex align-items-center gap-2 mb-2">
                                        <span class="fw-medium">Username</span>
                                        <span class="cursor-pointer" data-bs-toggle="tooltip"
                                              data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                              data-bs-html="true"
                                              data-bs-title="The username of your codecanyon account">
                                                    <img
                                                        src="{{asset('public/assets/installation')}}/assets/img/svg-icons/info2.svg"
                                                        class="svg" alt="">
                                                </span>
                                    </label>
                                    <input type="text" id="username" name="username" class="form-control"
                                           placeholder="Ex: John Doe" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="from-group">
                                    <label for="purchase_key" class="mb-2">Purchase Code</label>
                                    <input type="text" id="purchase_key" name="purchase_key" class="form-control"
                                           placeholder="Enter random value" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-dark px-sm-5">Continue</button>
                </div>
            </form>
        </div>
    </div>
@endsection
