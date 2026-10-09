@extends('frontend.master')

@section('title')
    Contact
@endsection

@section('contact')
    active
@endsection

@section('content')
    <div class="py-3">
        <div class="container ">
            <div class="row px-5 ">
                <div class="col-md-6 offset-3 border border-secondary rounded py-4">
                    <form class="row g-3">
                        <div class="col-md-12">
                            <label for="inputEmail4" class="form-label">Email</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Present Address</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress2" class="form-label">Permaent Address</label>
                            <input type="text" class="form-control" id="inputAddress2"
                                placeholder="Apartment, studio, or floor">
                        </div>
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">City</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">State</label>
                            <select id="inputState" class="form-select">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <label for="inputZip" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="inputZip">
                        </div>
                        <div class="col-12">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-success col-md-3">send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
