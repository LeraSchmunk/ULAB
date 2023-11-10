<template>
  <div>
    <div class="container" id="unique">
      <div class="unique">
        <div class="unique__title" >
          <div class="maintitle">Чем мы отличаемся от других LIMS</div>
          <img src="../../../public/img/differences-logo.png" alt="">
        </div>
        <div class="unique__column" >
          <div class="column1">
            <li>Полная интеграция с ФГИС ФСА по API</li><br>
            <li>Интеграция с 1С и 1С-Битрикс24</li><br>
            <li>Мощный модуль CRM</li><br>
            <li>Облачная версия</li><br>
            <li>Разработчики - крупный испытательный центр УралНИИстром</li><br>
            <li>Доказанная экономия времени - 30%</li><br>
          </div>
          <div class="column2">
            <li> QR-кодирование и защита протоколов от подделки</li><br>
            <li>Автоматизированное ведение журналов учета</li><br>
            <li>Финансовая статистика</li><br>
            <li>Безопасность, гарантированная наличием лицензий ФСТЭК</li><br>
            <li>Система на постоянной основе проходит аудит действующих экспертов Росаккредитации</li><br>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Unique"
}
</script>
<style scoped>
#unique{
  padding-bottom: 200px;
  padding-top: 100px;
}


.unique__title{
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding-bottom: 100px;
}
.unique__column{
  display: flex;
  justify-content: space-between;
  gap: 212px;

}

.unique__column div{
  padding-left: 24px;
  border-left: 4px solid #F9B4FF ;
  line-height: 1.1;
  font-size: 20px;
  width: 470px;

}

.column2{
  position: relative;
  top: 65px;
}
.maintitle{
color: #F9B4FF;
font-size: 48px;
width: 590px;
text-transform: uppercase;
}

</style>