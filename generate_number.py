import random
import os

file_path = 'excluded.txt'

if not os.path.isfile(file_path):
    open(file_path, 'a').close()

with open(file_path, 'r') as f:
    excluded_numbers = [int(x) for x in f.read().split(',') if x.strip()]

start = 12
end = 62
count = 3

random_numbers = []

while len(random_numbers) < count:
    random_number = random.randint(start, end)
    if random_number not in excluded_numbers and random_number not in random_numbers:
        random_numbers.append(random_number)

with open(file_path, 'a') as f:
    if excluded_numbers:
        f.write(',')
    f.write(','.join(str(x) for x in random_numbers))

print('Random Question Numbers:', ', '.join(str(x) for x in random_numbers))
