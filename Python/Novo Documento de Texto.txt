def exibeMenu():
    print("****MENU****")
    print("01 - Somar")
    print("02 - Subtrair")
    print("03 - Multiplicar")
    print("04 - Dividir")
    print("05 - Sair")
    opcao = int(input("Escolha uma opção: "))
    return opcao

def somar(valor1, valor2):
   return valor1+valor2

def subtrair(valor1, valor2):
   return valor1-valor2

def multiplicar(valor1, valor2):
   return valor1*valor2

def dividir(valor1, valor2):
   return valor1/valor2

#-----Excução Propiamente Dita----
varchk = 0
while varchk != 5:
    varchk = exibeMenu()
    if varchk == 1:
        var1 = float(input("valor1: "))
        var2 = float(input("valor2: "))
        print(somar(var1,var2))
    elif varchk == 2:
        var1 = float(input("valor1: "))
        var2 = float(input("valor2: "))
        print(subtrair(var1, var2))
    elif varchk == 3:
        var1 = float(input("valor1: "))
        var2 = float(input("valor2: "))
        print(multiplicar(var1, var2))
    elif varchk == 4:
        var1 = float(input("valor1: "))
        var2 = float(input("valor2: "))
        print(dividir(var1, var2))
    elif varchk == 5:
        print("Saindo...")
    else:
        print("Valor Inválido")
