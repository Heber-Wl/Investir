class Investir:
    def __init__(self, nomeEmp, user, valorInv):
        self.nomeEmp = nomeEmp
        self.user = user
        self.valorInv = valorInv

    #O calculo para investir deve ser feito encima do valor da ação da empresa, como posso ver esse valor? O valor total da empresa / pelo valor de uma ação, assim sabe-se quantas açoes você pode comprar. Deve-se calcula o valor que a pessoa investil e quantas ações aquele valor pode comprar, e assim ver o quanto cada empresa pode lucrar a cada mês.

    def Apresentacao(self):
        print("")
        print("")
        print("Olá Seja bem Vindo(a) à Gate Opton! ")
        print("Seu site de investimentos, vamos investir ?")
        print("Abaixo vou te mostrar as empresas disponíveis")
        print("e seu valor de mercado.")
        print("")
        print("")


    def escolhaEmpresa(self):
        self.empresas = [
            ("Petrobras", 568000000000), #36
            ("Itaú Unibanco", 315000000000), #33,2
            ("Vale", 309000000000), #61,17
            ("Ambev", 201000000000), #12.39
            ("BTG", 169000000000),#36
            ("Banco do Brasil", 165000000000),# 55,30
            ("WEG", 140000000000), #39,77
            ("Bradesco", 136000000000), #13,98
            ("Santander", 109000000000), #23,48
            ("Itúasa", 108000000000), #10,34
        ]

        print("Lista de Empresas:")
        print("")
        for i, (self.codigo, self.valor) in enumerate(self. empresas,    1):
            print(f"{i}. {self.codigo}:")
        self.numAcoes = 0
        self.precoAcao = 0
        self.minhasAcoes = 0

        self.numero_empresa = int(input("\nDigite o número da empresa para obter o valor de mercado correspondente: "))

        # Para fazer o calculo eu preciso saber o valor de uma ação e quantas ações tem em cada empresa, o valor da ação eu pesquiso na net, e divido pelo valor de mercado da empresa assim acho quantas ações a empresa possui
        #pego o crescimento na net e faço o calculo para cada empresa que eu digitar.


        if 1 <= self.numero_empresa <= len(self.empresas):
            self.codigo_escolhido, self.valor_mercado = self.empresas  [self.numero_empresa   - 1]
            print(f"O valor de mercado da empresa {self.codigo_escolhido}  é R$ {self.valor_mercado} bilhões.")
            print("")


        else:
            print("Número de empresa inválido.")
            self.escolhaEmpresa()



    def calculo(self):
        print("")
        self.valorInv = float(input("Digite o quanto você quer investir: "))
        print("")
        if self.numero_empresa == 1:
            self.precoAcao = 36
            self.numAcoes = self.valor_mercado / self.precoAcao
            self.minhasAcoes = self.valorInv / self.precoAcao
            print(f"Você possui {self.minhasAcoes:.0f} ações na empresa {self.codigo_escolhido}")

        elif self.numero_empresa == 2:
            self.precoAcao = 33.2
            self.numAcoes = self.valor_mercado / self.precoAcao
            self.minhasAcoes = self.valorInv / self.precoAcao
            print(f"Você possui {self.minhasAcoes:.0f} ações na empresa {self.codigo_escolhido}")

        elif self.numero_empresa == 3:
            self.precoAcao = 61.17
            self.numAcoes = self.valor_mercado / self.precoAcao
            self.minhasAcoes = self.valorInv / self.precoAcao
            print(f"Você possui {self.minhasAcoes:.0f} ações na empresa {self.codigo_escolhido}")

        elif self.numero_empresa == 4:
            self.precoAcao = 12.39
            self.numAcoes = self.valor_mercado / self.precoAcao
            self.minhasAcoes = self.valorInv / self.precoAcao
            print(f"Você possui {self.minhasAcoes:.0f} ações na empresa {self.codigo_escolhido}")

        elif self.numero_empresa == 5:
            self.precoAcao = 36
            self.numAcoes = self.valor_mercado / self.precoAcao
            self.minhasAcoes = self.valorInv / self.precoAcao
            print(f"Você possui {self.minhasAcoes:.0f} ações na empresa {self.codigo_escolhido}")

        elif self.numero_empresa == 6:
            self.precoAcao = 55.30
            self.numAcoes = self.valor_mercado / self.precoAcao
            self.minhasAcoes = self.valorInv / self.precoAcao
            print(f"Você possui {self.minhasAcoes:.0f} ações na empresa {self.codigo_escolhido}")

        elif self.numero_empresa == 7:
            self.precoAcao = 39.77
            self.numAcoes = self.valor_mercado / self.precoAcao
            self.minhasAcoes = self.valorInv / self.precoAcao
            print(f"Você possui {self.minhasAcoes:.0f} ações na empresa {self.codigo_escolhido}")

        elif self.numero_empresa == 8:
            self.precoAcao = 13.98
            self.numAcoes = self.valor_mercado / self.precoAcao
            self.minhasAcoes = self.valorInv / self.precoAcao
            print(f"Você possui {self.minhasAcoes:.0f} ações na empresa {self.codigo_escolhido}")

        elif self.numero_empresa == 9:
            self.precoAcao = 23.48
            self.numAcoes = self.valor_mercado / self.precoAcao
            self.minhasAcoes = self.valorInv / self.precoAcao
            print(f"Você possui {self.minhasAcoes:.0f} ações na empresa {self.codigo_escolhido}")

        elif self.numero_empresa == 10:
            self.precoAcao = 10.34
            self.numAcoes = self.valor_mercado / self.precoAcao
            self.minhasAcoes = self.valorInv / self.precoAcao
            print(f"Você possui {self.minhasAcoes:.0f} ações na empresa {self.codigo_escolhido}")

        print("")
        esc = input(f"Deseja saber a quantidade de ações que a Empresa {self.codigo_escolhido}? ss/nn")
        if esc == "ss":
            print("")
            print("Calculando...")
            print("")
            print(f"{self.numAcoes:.0f}")
            print("")
            esc2 = input(f"Deseja saber também quantos % das ações você possui? ")
            if esc2 == "ss":
                self.pocetagemAcao = (self.minhasAcoes * 100) / self.numAcoes
                print("Calculando...")
                print("")
                print(f"{self.pocetagemAcao:.3f}")

        else:
            print("")
            print("Certo! ")
            print("Besta")






        #if self.numero_empresa == 1:


        #self.valorCompra = self.valorInv / self.precoAcao
        print("")


    def redimento (self):
        print("")
        print("Aqui vamos simular seu redimento dentro de um ano: ")
        print("Você pode escolher o mês, ou pode pedir o detalhamento")
        print("por mês")
        if self.numero_empresa == 1:
            print("")# 1.69 -2.18 12.13 27.06 30.83 37.01 36.20 47.79 36.47 51.09 61.45 67.37
            self.tempo = int(input("Qual périodo deseja ver o seu redimento? "))
            if self.tempo == 1:
                print("")
                self.valor2 = ((self.valorInv * 1.69) / 100)  
                self.valor1 = self.valor2 + self.valorInv
                print(f"seu investimento em outubro está em R$ {self.valor1:.2f}, lucro de R$ {self.valor2:.2f}")
                print("")

            elif self.tempo == 2:
                print("")
                self.valor2 = ((self.valorInv * -2.18) / 100)
                self.valor1 = self.valor2 + self.valorInv
                print(f"seu investimento em novembro está em R$ {self.valor1:.2f}, lucro de R$ {self.valor2:.2f}")
                print("")

            elif self.tempo == 3:
                print("")
                self.valor2 = ((self.valorInv * 12.13) / 100)
                self.valor1 = self.valor2 + self.valorInv
                print(f"seu investimento em dezembro está em R$ {self.valor1:.2f}, lucro de R$ {self.valor2:.2f}")
                print("")

            elif self.tempo == 4:
                print("")
                self.valor2 = ((self.valorInv * 27.06) / 100)
                self.valor1 = self.valor2 + self.valorInv
                print(f"seu investimento em janeiro está em R$ {self.valor1:.2f}, lucro de R$ {self.valor2:.2f}")
                print("")

            elif self.tempo == 5:
                print("")
                self.valor2 = ((self.valorInv * 30.83) / 100)
                self.valor1 = self.valor2 + self.valorInv
                print(f"seu investimento em fevereiro está em R$ {self.valor1:.2f}, lucro de R$ {self.valor2:.2f}")
                print("")

            elif self.tempo == 6:
                print("")
                self.valor2 = ((self.valorInv * 37.01) / 100)
                self.valor1 = self.valor2 + self.valorInv
                print(f"seu investimento em abril está em R$ {self.valor1:.2f}, lucro de R$ {self.valor2:.2f}")
                print("")

            elif self.tempo == 7:
                print("")
                self.valor2 = ((self.valorInv * 36.20) / 100)
                self.valor1 = self.valor2 + self.valorInv
                print(f"seu investimento em maio está em R$ {self.valor1:.2f}, lucro de R$ {self.valor2:.2f}")
                print("")

            elif self.tempo == 8:
                print("")
                self.valor2 = ((self.valorInv * 47.79) / 100)
                self.valor1 = self.valor2 + self.valorInv
                print(f"seu investimento em junho está em R$ {self.valor1:.2f}, lucro de R$ {self.valor2:.2f}")
                print("")


            elif self.tempo == 9:
                print("")
                self.valor2 = ((self.valorInv * 36.47) / 100)
                self.valor1 = self.valor2 + self.valorInv
                print(f"seu investimento em julho está em R$ {self.valor1:.2f}, lucro de R$ {self.valor2:.2f}")
                print("")

            elif self.tempo == 10:
                print("")
                self.valor2 = ((self.valorInv * 51.09) / 100)
                self.valor1 = self.valor2 + self.valorInv
                print(f"seu investimento em agosto está em R$ {self.valor1:.2f}, lucro de R$ {self.valor2:.2f}")
                print("")

            elif self.tempo == 11:
                print("")
                self.valor2 = ((self.valorInv * 61.45) / 100)
                self.valor1 = self.valor2 + self.valorInv
                print(f"seu investimento em setembro está em R$ {self.valor1:.2f}, lucro de R$ {self.valor2:.2f}")
                print("")

            elif self.tempo == 12:
                print("")
                self.valor2 = ((self.valorInv * 67.34) / 100)
                self.valor1 = self.valor2 + self.valorInv
                print(f"seu investimento em outubro está em R$ {self.valor1:.2f}, lucro de R$ {self.valor2:.2f}")
                print("")

            self.redimento()





    def ordem (self):
        self.Apresentacao()
        self.escolhaEmpresa()
        self.calculo()
        self.redimento()

vv = Investir("","",0)
vv.ordem()