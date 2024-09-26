<!-- Post Ad Modal -->
<div class="modal fade" id="postadModal" tabindex="-1" aria-labelledby="postadModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="border-radius: 15px">
            <div class="modal-header d-flex justify-content-center">
                <p class="modal-title fs-5" id="exampleModalLabel">Message</p>
            </div>
            <div class="modal-body d-flex justify-content-center" style="color: #0044bb;">
                <p class="fs-5">
                    Login First to Take the Quiz !
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Flash Message Modal -->
@if (session()->has('success'))
    <script>
        window.onload = function() {
            var modal = new bootstrap.Modal(document.getElementById('flash'), {});
            modal.show();
        }
    </script>
    <div class="modal fade" id="flash" tabindex="-1" aria-labelledby="flashLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: 15px">
                <div class="modal-header d-flex justify-content-center">
                    <p class="modal-title fs-5" id="flashLabel">Message</p>
                </div>
                <div class="modal-body d-flex justify-content-center" style="color: #0044bb;">
                    <p>
                        {{ session('success') }}
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endif

<!-- Validation Message Modal -->
@if ($errors->any())
    <script>
        window.onload = function() {
            var modal = new bootstrap.Modal(document.getElementById('flash'), {});
            modal.show();
        }
    </script>
    <div class="modal fade" id="flash" tabindex="-1" aria-labelledby="flashLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: 15px">
                <div class="modal-body d-flex justify-content-center">
                    <ul class="list-group list-group-flush text-danger">
                        @foreach ($errors->all() as $error)
                            <li class="list-group-item fs-5">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endif
