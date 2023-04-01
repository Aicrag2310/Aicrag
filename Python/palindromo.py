#Creación de código para saber si una palabra es palindromo

palabra = input('Dime tu palabra a evaluar: ')
ultimo_caracter = len(palabra)-1
bandera = True
for i in range(len(palabra)):
    if palabra[i] != palabra[ultimo_caracter]:
        bandera = False
        break
    ultimo_caracter -=1
if bandera: print ("Tu palabra es ",palabra," es palindromo ")