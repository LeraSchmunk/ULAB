<template>
  <div id="projects">
    <div class="container">
      <div class="projects">
        <div class="tasks">
          <div class="task-block">
            <img src="img/niistrom.png" alt="">
            <div class="task-description">
              <div class="stars"></div>
              <div class="task">Провести испытания щебня согласно ГОСТ 8269.1</div>
            </div>
            <div class="price">121 000р</div>
          </div>
          <div class="task-block">
              <img src="img/niistrom.png" alt="">
              <div class="task-description">
                <div class="stars"></div>
                <div class="task">Провести испытания щебня согласно ГОСТ 8269.1</div>
              </div>
              <div class="price">104 450р</div>
          </div>
          <div class="task-block opacity069">
              <img src="img/niistrom.png" alt="">
              <div class="task-description">
                <div class="stars"></div>
                <div class="task">Провести испытания щебня согласно ГОСТ 8269.1</div>
              </div>
              <div class="price">90 100р</div>
          </div>
          <div class="task-block opacity039">
              <img src="img/niistrom.png" alt="">
              <div class="task-description">
                <div class="stars"></div>
                <div class="task">Провести испытания щебня согласно ГОСТ 8269.1</div>
              </div>
              <div class="price">154 040р</div>
          </div>
        </div>


      <div class="project">
        <div class="titleMonserrat">ПРОЕКТЫ НАШЕГО САЙТА В РЕАЛЬНОМ ВРЕМЕНИ</div>
        <div class="subtitleRoboto">Ежедневно тысячи пользователей доверяют свои поручения нашим исполнителям. Вы также можете опубликовать на сервисе свое задание, чтобы быстро найти лабораторию,которая его выполнит. Это удобно и безопасно!</div>
        <button class="baner__btn btnBlue">Создать задание</button>
      </div>
    </div>



    </div>
  </div>
</template>
<script>
export default {
  name: "Projects"
}
</script>
<style scoped>
#projects{
  background-color: #E9ECF0;

  /* height: 580px; */
  /* padding: 65px 0 60px 0; */

}
.projects{
  display: flex;
  justify-content: space-between;
  align-items: center;
}



.tasks{
  margin-top: 20px;
}

.task-block{
  display: flex;
  justify-content: space-between;
  align-items: center;
  border: 1px solid rgb(255, 255, 255);
  background-color: white;
  border-radius: 24px;
  padding: 22px 39px 22px 20px;
  margin-bottom: 8px;
}


.task{
  width: 250px;
  font-family: Montserrat, sans-serif;
  font-weight: 500;
  font-size: 16px;
  letter-spacing: -2%;
  margin-right: 57px;
}

.task-description{
  margin-left: 24px;
}

.price{
  font-family: Montserrat, sans-serif;
  color: #2B7AF1;
  font-weight: 600;
  font-size: 24px;
}

.opacity069{
  opacity: 0.69;
}
.opacity039{
  opacity: 0.39;
}

.titleMonserrat {
  width: 600px;
}

.subtitleRoboto {
width: 500px;
padding: 32px 0 40px 0;
}

</style>