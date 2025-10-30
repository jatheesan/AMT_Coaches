
@component('mail::message')
# New Enquiry Message

You have received a new message from your website's enquiry form.

---

**Name:** {{ $data['name'] }}  

**Email:** {{ $data['email'] }}  

**Phone:** {{ $data['phone'] ?? 'Not provided' }}  

**PickUp Address:** {{ $data['pickupaddress'] }} 

**PickUp Date:** {{ $data['pickupdate'] }} 

**PickUp Time:** {{ $data['pickuptime'] }}

**Dropoff Address:** {{ $data['dropoffaddress'] }} 

**Dropoff Date:** {{ $data['dropoffdate'] }} 

**Dropoff Time:** {{ $data['dropofftime'] }}

**No Of Passenger:** {{ $data['noofpassenger'] }} 

---

---

Thanks,  
{{ $data['name'] }}
@endcomponent