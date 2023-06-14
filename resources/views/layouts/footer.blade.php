<footer class="bg-dark">
    <div class="container">
        <h4>Online School</h4>

        <p>Online has become a vast and widely visited inter-network, Mcair has everything you need. <!-- <a href="#">Visit Mcair School</a></p> -->
    </div>

    <div class="container info">
        <div>
            <h4>Platforms</h4>
            <ul>
                <li class="nav-item"><a href="{{route('githubRepo')}}">github repository</a></li>
                <li class="nav-item"><a href="{{route('musicCloudPage')}}">music cloud</a></li>
                <li class="nav-item"><a href="{{route('behancePage')}}">behance</a></li>
            </ul>
        </div>
        <div>
            <h4>Policy and Conditions</h4>
            <ul>
                <li>
                    <a href="{{route('termsAndConditions')}}">Terms and Conditions</a>
                </li>
                <li>
                    <a href="{{route('privacyPolicy')}}">Privacy Policy</a>
                </li>
                <li class="nav-item"><a href="{{route('about')}}">About us</a></li>
            </ul>
        </div>
        <div>
            <h4>Walkthrough</h4>
            <ul>
                <li class="nav-item"><a href="{{route('code.reactjs')}}">ReactJs</a></li>
                <li class="nav-item"><a href="">PHP</a></li>
                <li class="nav-item"><a href="">HTML and CSS</a></li>
                <li class="nav-item"><a href="">C</a></li>
                <li class="nav-item"><a href="">C++</a></li>
                <li class="nav-item"><a href="">JavaScript</a></li>
            </ul>
        </div> 
        <div>
            <h4>Information</h4>
            <ul>
                <li class="nav-item"><a href="{{route('pricingPage')}}">Pricing</a></li>
                <li class="nav-item"><a href="{{route('contact')}}">Contact us</a></li>
            </ul>
        </div>        
    </div>

    <div class="container">
        <div class="copyright">
            <div class="social">
                <div class="social-icons">
                    <i>
                        <a href="http://" target="_blank" rel="noopener noreferrer">
                            <img src="{{asset('asset/images/icon/f.png')}}" alt="https://bit.ly/43aL7ib" srcset="">
                        </a>
                    </i>
                    <i>
                        <a href="http://" target="_blank" rel="noopener noreferrer">
                            <img src="{{asset('asset/images/icon/i.png')}}" alt="" srcset="">
                        </a>
                    </i>
                    <i>
                        <a href="http://" target="_blank" rel="noopener noreferrer">
                            <img src="{{asset('asset/images/icon/y.png')}}" alt="" srcset="">
                        </a>
                    </i>
                </div>
                <div>
                    <span style="margin-left:1em"><small>Partners</small> | @mudimba software @hats HD</span></p>
                </div>
            </div>
            <div class="company">
                <p class="text-center">Mcair-Studios-Tech | &copy; 2023 All Rights Reserved. 
            </div>
        </div>
    </div>
</footer>

<!-- ckeditor script file -->
<script src="{{asset('dist/aos.js')}}">
AOS.init({
        easing: 'ease-in-out-sine'
    });
</script>