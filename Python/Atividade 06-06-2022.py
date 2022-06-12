#Questão 1
def npress1(varn):
    for n in range(1,varn+1):
        var1 = str(n)
        print((var1+" ")*n)

#Questão 2
def npress2(varn):
    for n in range(1,varn+1):
        for m in range(1,n):
            var1 = str(m)
            print(var1+" ", end='')
        print(n)

#Questão 3
def triplensum(var1,var2,var3):
    return var1+var2+var3

print(triplensum(1,2,3))

#Questão 4
def signalcheck(var1):
    if not (type(var1) == int or type(var1) == float):
        return "Valor Inválido"
    elif var1 > 0:
        return "P"
    elif var1 <= 0:
        return "N"
    else:
        return "Valor Inválido"

#Questão 5
def somaImposto(valor,taxaImposto):
    taxaImposto /= 100
    return valor + (valor*taxaImposto)

#Questão 6
def valorPagamento(valorPrest,diasAtraso):
    return (1.03 + diasAtraso*0.001)*valorPrest

valorPrest = 1
relatolqua = 0
relatolval = 0
while valorPrest != 0:
    print("----Nova Operação----")
    valorPrest= float(input("Insira o Valor da Prestação: "))
    diasAtraso= int(input("Dias em Atraso: "))
    print(f"O Valor a Ser Pago é : {valorPagamento(valorPrest,diasAtraso)}")
    relatolqua += 1
    relatolval += valorPagamento(valorPrest,diasAtraso)
    print("----Operação Feita----")
print(f"Relatório\nValor Total das Prestações: {relatolval}\nQuantidade Total das Prestações: {relatolval}")



