@component('mail::message')
# New Enquiry Message

You have received a new message from your website's enquiry form.

---

**Name:** {{ $data['name'] }}

**Business / Organization:** {{ $data['business'] ?? 'Not provided' }}

**Email:** {{ $data['email'] }}

**Phone:** {{ $data['phone'] ?? 'Not provided' }}

**No Of Passengers:** {{ $data['noofpassenger'] }}

---

### Pickup Details

**Pickup Address:** {{ $data['pickupaddress'] }}

**Pickup Postcode:** {{ $data['pickup_postcode'] ?? 'Not provided' }}

**Pickup Date:** {{ $data['pickupdate'] }}

**Pickup Time:** {{ $data['pickuptime'] }}

---

### Destination Details

**Destination Address:** {{ $data['destinationaddress'] }}

**Destination Postcode:** {{ $data['destination_postcode'] ?? 'Not provided' }}

**Destination Date:** {{ $data['destinationdate'] }}

**Destination Time:** {{ $data['destinationtime'] }}

---

**Luggage:** {{ $data['luggage'] }}

**Journey Type:** {{ $data['journey_type'] }}

---

Thanks,
{{ $data['name'] }}
@endcomponent