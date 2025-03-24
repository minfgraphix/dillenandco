@component('mail::message')
# Invoice Payment Notification({{ $data['invoice'] }})

Hello Admin, <br>
Kindly note, {{ $data['name'] }} has made a payment of GHS {{ number_format($data['amount'],2) }} towards the invoice {{ $data['invoice'] }} <br> <br>

Details of this can be found on the PaySwitch Dashboard.
<br>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
