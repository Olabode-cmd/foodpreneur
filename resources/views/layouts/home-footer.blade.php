<footer>
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-6 col-lg-3">
                <img src="{{ asset('home/images/logo.png') }}" alt="logo">

                <p class="text-grey bold mt-4">Contact Us</p>

                <a href="mailto:support@foodpreneurshub.com" class="text-primary text-decoration-underline">support@foodpreneurshub.com</a>
            </div>
            <div class="col-md-6 col-lg-3">
                <p class="text-grey bold mt-2">Company</p>
                <ul>
                    <li><a href="{{ route('home.about') }}">About</a></li>
                    <li><a href="#careers.html">Careers</a></li>
                    <li><a href="#team.html">Join Team</a></li>
                    <li><a href="https://forms.gle/vcEUzcW5EuksAxcH9">Collaborators</a></li>
                    <li><a href="#privacy-policy.html">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-3">
                <p class="text-grey bold mt-2">Quick Links</p>
                <ul>
                    <li><a href="{{ route('home.courses') }}">Courses</a></li>
                    <li><a href="{{ route('home.blogs') }}">Blog</a></li>
                    <li><a href="{{ route('home.events') }}">Events</a></li>
                    <li><a href="{{ route('home.courses') }}">School</a></li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-3">
                <p class="text-grey bold mt-2">On Social</p>
                <ul>
                    <li><a target="_blank" href="https://www.facebook.com/foodpreneurshub">Facebook</a></li>
                    <li><a target="_blank" href="https://www.linkedin.com/company/foodpreneurs-hub/">LinkedIn</a></li>
                    <li><a target="_blank" href="https://twitter.com/foodpreneurshub">X (formerly Twitter)</a></li>
                    <li><a target="_blank" href="https://www.instagram.com/foodpreneurshub/">Instagram</a></li>
                    <li><a target="_blank" href="https://www.youtube.com/@foodpreneurshub8511">Youtube</a></li>
                </ul>
            </div>
        </div>

        <div class="d-flex justify-content-between mt-4">
            <p class="text-grey">All Rights Reserved.</p>
            <p class="text-grey">&copy; Foodpreneur Hub {{ date('Y') }}</p>
        </div>
    </div>
</footer>