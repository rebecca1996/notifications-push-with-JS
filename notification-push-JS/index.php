<?php 

/*classe chamada Notifications, ela pertence a nossa API do HTML 5 e seu proposito é nos permitir exibir notificações ao usuário para eventos como novos e-mails, tweets ou eventos de calendário e também nas interações do usuário, independentemente de qual aba esteja aberta.*/



 ?>

<script>
	/*Verifica se o browser é compatível com a API*/
if (window.webkitNotifications) {
  console.log('Seu browser possui suporte ao Notifications');
}
else {
  console.log('Seu browser não possui suporte ao Notifications');
}

//Verifica ao carregar a página se o usuário aceitou receber notificações, caso não tenha aceito, é enviado um pedido solicitando a autorização.

   //Após o carregamento da página
   document.addEventListener('DOMContentLoaded', function () {
 
  //Se não tiver suporte a Notification manda um alert para o usuário
  if (!Notification) {
    alert('Desktop notifications not available in your browser. Try Chromium.'); 
    return;
  }
  
  //Se não tem permissão, solicita a autorização do usuário
  if (Notification.permission !== "granted")
    Notification.requestPermission();
});

//Estrutura para criar uma notificação!
//Como podemos ver podemos criar um titulo, um icone e um texto para a notificação.
var notification = new Notification('Lembrete de Reunião', {
      icon: 'http://cdn.sstatic.net/stackexchange/img/logos/so/so-icon.png',
      body: "Voce tem um reunião marcada para as 10:30hrs",
    });

//É possível adicionar uma ação ao clicar na notificação que é exibida para o usuário!
notification.onclick = function () {
      window.open("http://stackoverflow.com/a/13328397/1269037");      
    };

</script>
