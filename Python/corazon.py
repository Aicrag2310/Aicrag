import turtle
#Configuramos la ventana y nuestra pluma

ventana = turtle.Screen()
ventana.setup(width=600, height=400)

pluma = turtle.Turtle()
pluma.speed(1) #Podemos cambiar despues su velocidad

#Dibujamos nuestro corazon <3

pluma.penup()
pluma.goto(0,0)
pluma.pendown()
pluma.color("red")
pluma.begin_fill()
pluma.left(45)
pluma.forward(100)
pluma.circle(50,180)
pluma.right(90)
pluma.circle(50,180)
pluma.forward(100)
pluma.end_fill()

#Escribimos el nombre de nuestra enamorada

pluma.penup()
pluma.goto(0,-80)
pluma.color("black")
pluma.write("Sigueme para mas videos -Aicrag Code Wise",align="center",font=(
    "Arial",20,"bold"))

#Mostramos la ventana
ventana.mainloop()


