
document.addEventListener('DOMContentLoaded', () => {
  const form = document.getElementById('contactForm');
  const msg  = document.getElementById('form-msg');
  const captchaQuestion = document.getElementById('captchaQuestion');
  const captchaAnswer   = document.getElementById('captchaAnswer');

  let correctAnswer = 0;
  function newCaptcha(){
    const n1 = Math.floor(Math.random()*9)+1;
    const n2 = Math.floor(Math.random()*9)+1;
    correctAnswer = n1 + n2;
    if(captchaQuestion) captchaQuestion.textContent = n1+' + '+n2+' = ?';
    if(captchaAnswer) captchaAnswer.value='';
  }
  newCaptcha();

  if(!form) return;
  form.addEventListener('submit', async (e) => {
    e.preventDefault();
    if(parseInt(captchaAnswer.value) !== correctAnswer){
      showMsg('error','Incorrect captcha answer. Please try again.'); newCaptcha(); return;
    }
    const submitBtn = form.querySelector('button[type=submit]');
    submitBtn.disabled=true; submitBtn.textContent='Sending...';
    try {
      const res = await fetch('submit_contact.php',{method:'POST',body:new FormData(form)});
      const json = await res.json();
      if(json.success){ showMsg('success','Thank you! Your message has been received. We will get back to you within 24 hours.'); form.reset(); newCaptcha(); }
      else showMsg('error', json.message || 'Something went wrong. Please try again.');
    } catch(err){ showMsg('error','Network error. Please try again later.'); }
    submitBtn.disabled=false; submitBtn.textContent='Send Message \u2192';
  });

  function showMsg(type,text){
    msg.className=type; msg.textContent=text; msg.style.display='block';
    msg.scrollIntoView({behavior:'smooth',block:'nearest'});
    setTimeout(()=>{ msg.style.display='none'; },8000);
  }
});
