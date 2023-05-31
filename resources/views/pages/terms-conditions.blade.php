@extends('layouts.app')
@section('page-title', 'Terms and Conditions')
@section('meta_keywords','terms, conditions, page, Mcair Studio and Tech')
@section('meta_description', 'our sites terms and conditions')

@section('content')
<div class="container">
    <h1>Terms and Conditions</h1>

    <ul>
        <p>Welcome to {{$companyName}} These terms and conditions govern your use of our website and services. By accessing or using our website or services, you agree to be bound by these terms and conditions. If you do not agree with these terms, please do not access or use our website or services.</p>
    </ul>

    <p>
        Use of Our Website and Services
        Our website and services are for personal or commercial use, subject to the terms and conditions herein. You agree to use our website and services in accordance with applicable laws and regulations.
    </p>

    <p>
        Intellectual Property
        The content, design, and layout of our website and services are protected by intellectual property laws and regulations. You may not copy, modify, distribute, reproduce, or display any portion of our website or services without our prior written consent.
    </p>

    <p>
        User-Generated Content
        You may be able to submit content, such as comments, reviews, or feedback, through our website or services. You represent and warrant that any content you submit is original, accurate, and does not infringe upon any third-party rights. By submitting content, you grant us a non-exclusive, transferable, and sublicensable right to use, reproduce, and modify the content for any purpose.
    </p>

    <p>
        <h1>Privacy Policy</h1>
        Our Privacy Policy outlines how we collect, use, and safeguard your personal information. By accessing or using our website or services, you agree to the terms of our Privacy Policy.
    </p>

Disclaimer of Warranties
Our website and services are provided on an "as is" and "as available" basis, without any express or implied warranties. We do not warrant that our website or services will be error-free or uninterrupted, and we disclaim all warranties, including but not limited to warranties of merchantability, fitness for a particular purpose, and non-infringement.

Limitation of Liability
We are not liable for any damages or losses arising out of your use of our website or services, including but not limited to direct, indirect, incidental, punitive, and consequential damages. Our liability is limited to the extent permitted by law.

Indemnification
You agree to indemnify and hold us harmless from any claims, damages, and expenses arising out of your use of our website or services or your violation of these terms and conditions.

    <p>
        <h1>Governing Law and Dispute Resolution</h1>
        These terms and conditions are governed by the laws of our country. Any disputes arising out of or related to these terms and conditions will be resolved through binding arbitration in accordance with the rules of ZICTA. The decision of the arbitrator will be final and binding.
    </p>

    <p>
        <h1>Changes to Terms and Conditions</h1>
    We reserve the right to modify or update these terms and conditions at any time without prior notice. The revised terms and conditions will be posted on our website, and the changes will be effective upon posting.
    </p>

    <p>
        <h1>Contact Us</h1>
        If you have any questions, concerns, or requests regarding these terms and conditions or the use of our website or services, please contact us at <a href="{{route('contact')}}">our contacts page</a>.
    </p>

    <p>
        By using our website or services, you acknowledge that you have read and understood these terms and conditions and agree to be bound by them.
    </p>
</div>
@endsection