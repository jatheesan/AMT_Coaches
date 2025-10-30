
@component('mail::message')
# New Contact Message

You have received a new message from your website's contact form.

---

**Name:** {{ $data['name'] }}  
**Email:** {{ $data['email'] }}  
**Phone:** {{ $data['phone'] ?? 'Not provided' }}  

---

**Message:**

{{ $data['message'] }}

---

Thanks,  
{{ $data['name'] }}
@endcomponent