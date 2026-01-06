


const menu = [

  { icon: "user-plus", link: "?a=cadastra", name: "Cadastrar Cliente", title: 'Cadastrar' },
  { icon: "user-account", link: "?a=consulta", name: "Consulta Cliente", title: 'Consultar' },
  { icon: "user-detail", link: "pgs/listaCli.php", name: "Listar", title: 'Listar Clientes' },
  { icon: "notepad", link: "?a=orcar", name: "Orçamento", title: 'Orçamento' },
  { icon: "receipt", link: "?a=recibo", name: "Recibo", title: 'Recibo' },
  
  
];

menu.map((i) => {
  $(".menu").append(`
      <a href=${i.link}>
        <li class='center'><box-icon title=${i.title} type='solid' size='lg' name=${i.icon}></box-icon></li>
      </a>
  `);
});


// $('.items form').submit((e) => {
//   e.preventDefault()
//   $('.modal').hide()
// })

$('.modal form').submit(e=>{
  var log = $('.log')
  var pass = $('.pass')
  e.preventDefault()
  if(log.val()== 'admin' && pass.val() == 'admin'){
    $('.modal').hide()
  }else{alert('Login ou Senha inválidos, tente novamente !')}
})

totalSub=0
var form =  $('.formulario').submit(e=>{
  // e.preventDefault()
  var quant = $('.quantidade')
  var desc = $('.descricao')
  var val = $('.valor')
  var subTotal = quant.val() * val.val()
  e.preventDefault()
  $('.dados table').append(`
    <tr>
      <td>${quant.val()}</td>
      <td>${desc.val()}</td>
      <td>${'R$ '+subTotal.toFixed(2)}</td>
    </tr>
  `)
  quant.val('').focus()
  desc.val('')
  val.val('')
  total = totalSub+=subTotal
  $('.total span').html('TOTAL = R$ '+total.toFixed(2))

})


