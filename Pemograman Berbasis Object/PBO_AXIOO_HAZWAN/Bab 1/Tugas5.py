import platform

print("Masukan bilangan:")
if __name__ == "__main__":
    bilangan = int(input())
    if bilangan % 2 == 0:
        print("Angka yang anda masukan termasuk bilangan genap")
    else:
        print("Angka yang anda masukan termasuk bilangan ganjil")
deret=[]
for i in range(bilangan, bilangan + 10, 2):
    deret.append(i)
print("5 angka berderet dari bilangan yang anda masukan adalah:" , deret)
print("Nama Komputer\t: ",platform.node())