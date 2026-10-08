import platform

print("Masukkan nilai ujian pertama;")
nilai1 = float(input())
print("Masukkan nilai ujian kedua;")
nilai2 = float(input())
print("Masukkan nilai ujian ketiga;")
nilai3 = float(input())
rata = (nilai1 + nilai2 + nilai3) / 3
print("Rata-rata:", rata)
print("Nama Komputer\t: ",platform.node())