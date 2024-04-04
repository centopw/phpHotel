@component('mail::message')
# Congratulations

Your Reservation is Accepted, Please clear the bill.

@component('mail::button', ['url' => 'http://127.0.0.1:8000/'])
Pay Here
@endcomponent

Thanks,<br>
Book karo
@endcomponent
