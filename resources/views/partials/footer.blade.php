<footer class="footer" style="display: flex; justify-content: space-between; align-items: center; padding: 1rem; background-color: #2C3A47; color: #fff;">
    <style>
        .footer-links {
            list-style-type: none;
            display: flex;
            gap: 1rem;
            margin: 0; /* Reset margin for footer links */
        }

        .footer-links li {
            margin: 0; /* Reset margin for list items */
        }

        .footer__left p, 
        .footer-links li a {
            color: #fff;
            text-decoration: none;
            font-size: 0.9rem;
        }

        @media (max-width: 768px) {
            .footer {
                flex-direction: column; /* Stack items on small screens */
                align-items: flex-start; /* Align items to the start */
            }

            .footer__left {
                margin-bottom: 1rem; /* Space between the two sections */
            }
        }
    </style>

    <div class="footer__left">
        <p>&copy; {{ date('Y') }} MediConnect. All rights reserved.</p>
    </div>

    <div class="footer__right">
        <ul class="footer-links">
            {{-- <li><a href="{{ route('privacy.policy') }}">Privacy Policy</a></li>
            <li><a href="{{ route('terms.of.service') }}">Terms of Service</a></li>
            <li><a href="{{ route('contact.us') }}">Contact Us</a></li> --}}
        </ul>
    </div>
</footer>
